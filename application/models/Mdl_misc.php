<?php

class Mdl_misc extends CI_Model{
	
	public function __construct(){
		parent::__construct();
	}
	
	public function sv_comment($data){
		return $this->db->insert('ibf_article_comment', $data);
	}
	
	public function inc_comment($article_id){
		$sql = "update ibf_article set article_comment_count = article_comment_count + 1 
				where article_id = '$article_id'";
		return $this->db->query($sql);
	}
	
	public function get_comment_article($id){
		$this->db->where('comment_article_id', $id);
		$this->db->where('comment_approved', 1);
		return $this->db->get('ibf_article_comment')->result_array();
	}
	
	public function count_comment($id){
		$sql = "select count(*) as total from ibf_article_comment where comment_article_id = '$id'";
		$data = $this->db->query($sql)->result_array();
		return $data[0]['total'];
	}
	
	public function sv_donation($data){
		$act = $this->db->insert('ibf_donation',$data);
		if($data['member_id'] != ""){
			$donator = array(
				'donator_name' => $data['name'],
				'member_id'	=> $data['member_id']
			);
			$this->db->insert('ibf_donator', $donator);
		}
		return TRUE;
	}
	

}