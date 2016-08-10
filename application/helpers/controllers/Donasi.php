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
		$this->load->model('Mdl_misc','misc');
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
		$this->data['title'] = 'Donasi - Beastudy Ilmu Berbagi';
		$this->data['page'] = 'page/donasi';
		$this->data['jenis'] = '';
		$this->data['amount'] = '';
		$this->load->view('template', $this->data);
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

	public function sv_donation(){
		$page = $this->input->post('page');
		$this->load->library('recaptcha');
		$recaptcha = $this->input->post('g-recaptcha-response');
        if (!empty($recaptcha)) {
            $response = $this->recaptcha->verifyResponse($recaptcha);
            if (isset($response['success']) and $response['success'] === true) {
				# data donasi
				$data = array(
					'member_id'	=> $this->security->xss_clean($this->input->post('member_id')),
					'name'	=> $this->security->xss_clean($this->input->post('donator_name')),
					'email'	=> $this->security->xss_clean($this->input->post('donator_email')),
					'description'	=> $this->security->xss_clean($this->input->post('description')),
					'amount'	=> $this->security->xss_clean($this->input->post('amount')),
					'currency'	=> $this->security->xss_clean($this->input->post('currency')),
					'bank'		=> $this->security->xss_clean($this->input->post('bank_transfer')),
					'date_donate'	=> date('Y-m-d H:i:s', strtotime(str_replace('/','-', $this->input->post('date_donate')))),
					'date_input'	=> date('Y-m-d H:i:s'),
				);
				$act = $this->misc->sv_donation($data);
				if($act){
					# send mail
					$this->load->library('Lib_mailer');
					$this->lib_mailer->init(array('name'=>'Donasi Ilmu Berbagi'));
					$bcc = array(
						'email' => 'info@ilmuberbagi.or.id',
						'name'	=> 'Ilmu Berbagi Foundation'
					);
					$result = array(
						'nama_donatur'	=> $data['name'],
						'jenis_donasi'	=> $data['description'],
						'bank' 		=> $data['bank'],
						'jumlah'	=> $data['amount'],
						'mata_uang'	=> $data['currency'],
						'tanggal'	=> $data['date_donate'],
					);
					$message = $this->load->view('template/mailer/donasi', $result, TRUE);
					$send = $this->lib_mailer->sendmail(array('email'=>$data['email']), 'Donasi Ilmu Berbagi', $message, '', $bcc);
					if($send){
						$msg = '<div class="alert alert-success alert-dismissable">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
							<h4>Terimakasih!</h4>Anda telah melakukan konfirmasi donasi online. Kami akan segera mengirimkan konfirmasi email penerimaan donasi Anda. Salam berbagi...</div>';
						$this->session->set_flashdata('msg', $msg);
					}else{
						$msg = '<div class="alert alert-warning alert-dismissable">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
							<h4>Peringatan!</h4>Konfirmasi Donasi online Anda telah kami terima. Tim kami akan segera mengirimkan email konfirmasi, apabila dalam waktu 1x24 jam email belum masuk, silakan hubungi kami di kontak yang tersedia di halmaman kami. Salam Berbagi...</div>';
						$this->session->set_flashdata('msg',$msg);
					}
				}
			}else{
				$msg = '<div class="alert alert-warning alert-dismissable">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
					<h4>Peringatan!</h4>Silakan ikuti intruksi capcha yang diberikan.</div>';
				$this->session->set_flashdata('msg',$msg);
			}
		}else{
			$msg = '<div class="alert alert-warning alert-dismissable">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
				<h4>Peringatan!</h4>Anda harus mengecek capcha yang disediakan dan ikuti instruksi yang diberikan.</div>';
			$this->session->set_flashdata('msg',$msg);
		}
		redirect($page);
	}
	
}