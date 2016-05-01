<?php

/**
 * @package    homepage ilmuberbagi.or.id / 2016
 * @author     Sabbana
 * @copyright  Divisi IT IBF
 * @version    1.0
 */
 
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
	
	var $data = array();
	
	function __construct(){
		parent::__construct();
	}

	private function clean($str){
		$str = str_replace(array('"','"'),'', $str);
		return $this->security->xss_clean($str);
	}
	
	public function index(){
		define('AUTH_API_URL','http://services.ilmuberbagi.id/auth/user');
		$datapost = array(
			'username'	=> $this->clean($this->input->post('username')),
			'password'	=> $this->clean($this->input->post('password'))
		);
		$postdata = http_build_query(array('api_kode' => 1000, 'api_datapost' => $datapost));
		$param = array('http' =>
			array(
				'method'  => 'POST',
				'header'  => 'Content-type: application/x-www-form-urlencoded',
				'content' => $postdata
			));
		$context  = stream_context_create($param);
		$user = json_decode(file_get_contents(AUTH_API_URL, false, $context), TRUE);
		# get user privilage
		if(!empty($user)){
			$postdata = http_build_query(array('api_kode' => 2000, 'api_datapost' => array('member_id'=>$user[0]['member_id'])));
			$param = array('http' =>
				array(
					'method'  => 'POST',
					'header'  => 'Content-type: application/x-www-form-urlencoded',
					'content' => $postdata
				));
			$context  = stream_context_create($param);
			$priv = json_decode(file_get_contents(AUTH_API_URL, false, $context), TRUE);
			$create_session = array(
				'id'			=> $user[0]['member_id'],
				'ibf_token_string'	=> 'IBF'.md5($user[0]['member_id']),
				'email'			=> $user[0]['member_email'],
				'username'		=> $datapost['username'],
				'name'			=> $user[0]['member_name'],
				'avatar'		=> $user[0]['member_image_profile'],
				'year'			=> $user[0]['member_reg_year'],
				'type'			=> $user[0]['member_type'],
				'ibf_code'		=> $user[0]['member_ibf_code'],
				'privilage'		=> $priv[0],
			);
			$this->session->set_userdata($create_session);
			redirect();
		}else{
			$this->session->set_flashdata('invalid','Username dan password yang Anda masukkan tidak valid!');
			redirect('http://portal.ilmuberbagi.id/login');
		}
	}
	
	public function logout(){
		$this->session->sess_destroy();
		redirect();
	}
	
}