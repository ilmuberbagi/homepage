<?php

/**
 * @package    homepage ilmuberbagi.or.id / 2016
 * @author     Sabbana
 * @copyright  Divisi IT IBF
 * @version    1.0
 */
 
defined('BASEPATH') OR exit('No direct script access allowed');

class Program extends CI_Controller {
	
	var $data = array();
	
	function __construct(){
		parent::__construct();
		$this->data['article_categories'] = $this->get_blog_category();
	}

	private function get_blog_category(){
		$url = "http://localhost/ibf/services/article/category";
		return json_decode(file_get_contents($url));		
	}

	public function read($param){
		$this->data['title'] = 'Program Ilmu Berbagi Foundation';
		$this->data['page'] = 'static/program';
		$this->data['content'] = str_replace('-','_', $param);
		$this->load->view('template', $this->data);
	}
}