<?php

class Admin_exec extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('db_admin');
	}
	
	public function index()
	{
		exit("Page not found");
	}
	
	public function save_page()
	{
		$this->db_admin->insert_page();
	}

	public function save_post()
	{
		$this->db_admin->insert_post();
	}
	
}