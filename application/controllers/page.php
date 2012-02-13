<?php
class Page extends CI_Controller
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
		$aUri= $this->uri->uri_to_assoc(1);
		
		$aData['page_content'] = $this->db_front->get_page();
		$aData['current_page'] = $aUri['page'];
		
		$aData['page_data'] = $this->db_front->check_page($aUri['page']);
		$aWebStructure[] = FRONT_PATH . 'header';
		$aWebStructure[] = FRONT_PATH . 'navigator';
		$aWebStructure[] = FRONT_PATH . 'left';
		$aWebStructure[] = FRONT_PATH . 'right';
		$aWebStructure[] = FRONT_PATH . 'footer';
		$aOtherArgs['post_content'] = $this->common->exec_fetch('front/pagecontent',$aData);
		$aOtherArgs['title'] = 'Pacificindio';
		$aOtherArgs['share_links'] = $this->common->exec_fetch('front/share');
		$aOtherArgs['search_form'] = $this->common->exec_fetch('front/searchform');
		$aOtherArgs['owner_info'] = $this->common->exec_fetch('front/owner');		
		$aOtherArgs['post'] = $this->common->exec_fetch('front/post');			
		
		$this->common->exec_view($aWebStructure,$aOtherArgs);
	}
}