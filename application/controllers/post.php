<?php
class Post extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}
	public function index()
	{
		$aData = $this->uri->uri_to_assoc(2);
		var_dump($aData);
	}	
	public function show()
	{
		echo"post here";
	}
}