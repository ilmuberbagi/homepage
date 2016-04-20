<?php

/**
 * @package    homepage ilmuberbagi.or.id / 2016
 * @author     Sabbana
 * @copyright  Divisi IT IBF
 * @version    1.0
 */
 
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	
	var $data = array();
	
	function __construct(){
		parent::__construct();
	}

	public function index() {
		$this->data['title'] = 'Ilmu Berbagi Foundation';
		$this->data['page'] = 'static/home';
		
		# get category article
		$url = "article/category";
		$this->data['article_categories'] = json_decode(file_get_contents(API_URL.$url));
		
		$this->load->view('template', $this->data);
	}
}