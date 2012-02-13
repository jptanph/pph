<?php

class Db_admin extends CI_Model
{	
	private $_tbl_pip_pages;
	public function __construct()
	{
		parent::__construct();
		$this->_tbl_pi_pages = 'pi_pages';
		$this->load->database();		
		$this->load->library('common');
	}
	
	public function get_page()
	{
		$sSql = "SELECT * FROM $this->_tbl_pi_pages WHERE pip_post_type='page'";
		$aResult = $this->db->query($sSql);
		return $aResult->result();
	}

	public function get_post()
	{
		$sSql = "SELECT * FROM $this->_tbl_pi_pages WHERE pip_post_type='post'";
		$aResult = $this->db->query($sSql);
		return $aResult->result();
	}
	
	public function insert_page()
	{
		$aData = array(
				
			'pip_parent_idx' => $this->input->post('parent_page'),
			'pip_post_name' => $this->common->param_bar(trim($this->input->post('title'))),			
			'pip_title'=>$this->input->post('title'),
			'pip_content'=>$this->input->post('content'),
			'pip_post_type'=>$this->input->post('post_type'),
			'pip_published'=>$this->input->post('published_status'),
			'pip_date_created' =>date('Y-m-d h:m:s')
		);
		return $this->db->insert('pi_pages', $aData); 
	}

	public function insert_post()
	{
		$aData = array(
			'pip_parent_idx' => $this->input->post('parent_page'),
			'pip_post_name' => 'asd',
			'pip_title'=>$this->input->post('title'),
			'pip_content'=>$this->input->post('content'),
			'pip_post_type'=>$this->input->post('post_type'),
			'pip_published'=>$this->input->post('published_status'),
			'pip_date_created' =>date('Y-m-d h:m:s')
		);
		return $this->db->insert('pi_pages', $aData);
	}
	
}