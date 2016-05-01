<?php

/**
 * @package    homepage ilmuberbagi.or.id / 2016
 * @author     Sabbana
 * @copyright  Divisi IT IBF
 * @version    1.0
 */
 
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {
	
	var $data = array();
	
	function __construct(){
		parent::__construct();
		$this->data['article_categories'] = $this->get_blog_category();
		$this->data['footer_article'] = $this->footer_article();
	}

	/**
	 * get category article
	 */
	private function get_blog_category(){
		$url = "article/category";
		return json_decode(file_get_contents(API_URL.$url));
	}

	/**
	 * get the last uploaded article 3
	 */
	private function footer_article(){
		$url = "article/category/all/0/3";
		return json_decode(file_get_contents(API_URL.$url));		
	}

	public function index(){
		$this->data['title'] = 'IBF Artikel : Last Post';
		$this->data['page'] = 'page/blog';
		$url = "article/category/all";
		$this->data['article'] = json_decode(file_get_contents(API_URL.$url));
		$this->load->view('template', $this->data);		
	}
	
	public function category($param, $start=0, $offset=6) {
		$this->data['title'] = 'IBF Artikel : '.ucwords($param);
		$this->data['page'] = 'page/blog';
		
		# get category article
		$url = "article/category/".$param.'/'.$start.'/'.$offset;
		$this->data['article'] = json_decode(file_get_contents(API_URL.$url));
		
		$this->load->view('template', $this->data);
	}
	
	public function tag($param){
		$param = gen_url($param);
		$this->data['title'] = 'IBF Artikel : '.ucwords($param);
		$this->data['page'] = 'page/blog';
		
		# get category article
		$url = "article/tag/".$param.'/'.$start.'/'.$offset;
		$this->data['article'] = json_decode(file_get_contents(API_URL.$url));
		
		$this->load->view('template', $this->data);
	}
	
	public function read($id, $title = ""){
		$this->data['page'] = 'page/blog_read';
		$url = "article/read/".$id;
		$this->data['article'] = json_decode(file_get_contents(API_URL.$url));
		$this->data['title'] = 'IBF Artikel : '.$title;
		
		# get comments
		$comment_url = "";
		
		# open graph for facebook
		$this->data['ogfb']['og:url'] = current_url();
		$this->data['ogfb']['og:type'] = 'article';
		$this->data['ogfb']['og:title'] = (string)$this->data['article'][0]->article_title;
		$this->data['ogfb']['og:image'] = (string)$this->data['article'][0]->article_image;
		$this->data['ogfb']['og:description'] = headline($this->data['article'][0]->article_content);
		$this->data['ogfb']['og:site_name'] = 'Ilmu Berbagi - Artikel';
		# open graph for twitter
		$data['ogtw']['twitter:card'] = 'detail_article';
		$data['ogtw']['twitter:site'] = '@ilmuberbagi';
		$data['ogtw']['twitter:creator'] = '@ilmuberbagi';
		$data['ogtw']['twitter:title'] = (string)$this->data['article'][0]->article_title;
		$data['ogtw']['twitter:image'] = $this->data['ogfb']['og:image'];
		$data['ogtw']['twitter:description'] = $this->data['ogfb']['og:description'];

		$this->load->view('template', $this->data);		
	}
	
	/**
	 * Comments post
	 */
	public function post_comment(){
		define('AUTH_API_URL','http://services.ilmuberbagi.id/article/comment');
		$name = $this->security->xss_clean($this->input->post('guest_name'));
		$email = $this->security->xss_clean($this->input->post('guest_email'));
		$content = $this->security->xss_clean($this->input->post('guest_comment'));
		$datapost = array(
			'member_id'				=> $this->session->userdata('id'),
			'comment_articel_id'	=> $this->input->post('article_id'),
			'comment_author'		=> $name,
			'comment_author_email'	=> $email,
			'comment_author_url'	=> $this->session->userdata('avatar'),
			'comment_author_ip'		=> $this->input->post('ip'),
			'comment_content'		=> $content,
			'comment_date_input'	=> date('Y-m-d H:i:s')
		);
		$postdata = http_build_query(array('api_kode' => 1000, 'api_datapost' => $datapost));
		$param = array('http' =>
			array(
				'method'  => 'POST',
				'header'  => 'Content-type: application/x-www-form-urlencoded',
				'content' => $postdata
			));
		$context  = stream_context_create($param);
		$res = file_get_contents(AUTH_API_URL, false, $context);
		echo $res;
	}
	
}