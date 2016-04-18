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
	}

	private function get_blog_category(){
		$url = "article/category";
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
	
	public function read($id, $title){
		$this->data['page'] = 'page/blog_read';
		$url = "article/read/".$id;
		$this->data['article'] = json_decode(file_get_contents(API_URL.$url));
		$this->data['title'] = 'IBF Artikel : '.$title;
		$this->load->view('template', $this->data);		
	}
	
}