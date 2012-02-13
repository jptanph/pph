<?php

class Db_front extends CI_Model
{	
	private $_tbl_pip_pages;
	public function __construct()
	{
		parent::__construct();
		$this->_tbl_pi_pages = 'pi_pages';
		$this->load->database();		
	}
	
	public function get_post()
	{
		$sSql = "SELECT *,DATE_FORMAT(pip_date_created,'%M %d %Y %I:%m:%s') AS date_created  FROM $this->_tbl_pi_pages WHERE pip_post_type = 'post' ORDER BY pip_date_created DESC";
		$aResult = $this->db->query($sSql);
		return $aResult->result();
	}
	
	public function get_page()
	{
		$sSql = "SELECT *,DATE_FORMAT(pip_date_created,'%M %d %Y %I:%m:%s') AS date_created  FROM $this->_tbl_pi_pages WHERE pip_post_type = 'page' ORDER BY pip_date_created DESC";
		$aResult = $this->db->query($sSql);
		return $aResult->result();
	}

	public function check_page($sPostName)
	{
		$sSql = "SELECT * FROM $this->_tbl_pi_pages WHERE pip_post_type='page' AND pip_post_name='$sPostName'";
		$aResult = $this->db->query($sSql);
		return $aResult->result();	
	}	
}