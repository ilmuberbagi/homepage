<?php

/**
 * @package    homepage ilmuberbagi.or.id / 2016
 * @author     Sabbana
 * @copyright  Divisi IT IBF
 * @version    1.0
 */
 
defined('BASEPATH') OR exit('No direct script access allowed');

class Donasi extends CI_Controller {
	
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
		$this->beastudy();
	}
	
	public function beastudy(){
		$this->data['title'] = 'Donasi - Beastudy Ilmu Berbagi';
		$this->data['page'] = 'page/donasi';
		$this->data['jenis'] = 'Beastudy Ilmu Berbagi';
		$this->data['amount'] = 200000;
		$this->load->view('template', $this->data);
	}

	public function academy(){
		$this->data['title'] = 'Donasi - Ilmu Berbagi Academy Heroes';
		$this->data['page'] = 'page/donasi';
		$this->data['amount'] = 500000;
		$this->data['jenis'] = 'Ilmu Berbagi Academy Heroes';
		$this->load->view('template', $this->data);
	}

	
}