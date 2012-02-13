<?php

class See extends CI_Controller
{
	private $_aInfo = array();
	
	public function __construct()
	{
		parent::__construct();
		$this->load->library('common');	
		$this->load->model('db_front');
		$this->common->init_env();
	}
	
	public function index()
	{	

		$aData['current_page'] = '';
	
		$aData['page_content'] = $this->db_front->get_page();
		$aData['post_content'] = $this->db_front->get_post();	

		$aWebStructure[] = FRONT_PATH . 'header';
		$aWebStructure[] = FRONT_PATH . 'navigator';
		$aWebStructure[] = FRONT_PATH . 'left';
		$aWebStructure[] = FRONT_PATH . 'right';
		$aWebStructure[] = FRONT_PATH . 'footer';
		
		$aOtherArgs['title'] = 'Pacificindio';
		$aOtherArgs['post_content'] = $this->common->exec_fetch('front/page',$aData);
		$aOtherArgs['share_links'] = $this->common->exec_fetch('front/share');
		$aOtherArgs['search_form'] = $this->common->exec_fetch('front/searchform');
		$aOtherArgs['owner_info'] = $this->common->exec_fetch('front/owner');		
		$aOtherArgs['post'] = $this->common->exec_fetch('front/post');			
		
		$this->common->exec_view($aWebStructure,$aOtherArgs);
	}
	
	/**
	 * module method controller
	 */
	public function md()
	{
			echo"asdasdasd";
		$this->load->library('modules/page');	
	}
}