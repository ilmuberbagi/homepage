<?php

/**
 * @package    homepage ilmuberbagi.or.id / 2016
 * @author     Sabbana
 * @copyright  Divisi IT IBF
 * @version    1.0
 */
 
defined('BASEPATH') OR exit('No direct script access allowed');

class Layanan extends CI_Controller {
	
	var $data = array();
	
	function __construct(){
		parent::__construct();
		$this->data['article_categories'] = $this->get_blog_category();
		$this->data['footer_article'] = $this->footer_article();
	}

	private function get_blog_category(){
		$url = "article/category";
		return json_decode(file_get_contents(API_URL.$url));
	}

	private function footer_article(){
		$url = "article/category/all/0/3";
		return json_decode(file_get_contents(API_URL.$url));		
	}

	public function read($param){
		$this->data['title'] = 'Program Ilmu Berbagi Foundation';
		$this->data['page'] = 'static/layanan';
		$this->data['content'] = str_replace('-','_', $param);
		$this->load->view('template', $this->data);
	}
}