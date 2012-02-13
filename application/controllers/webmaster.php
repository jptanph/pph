<?php

class Webmaster extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('common');	
		$this->load->model('db_admin');
		$this->common->init_env();		
	}
	
	public function index()
	{

		$aWebStructure[] = ADMIN_PATH . 'header';
		$aWebStructure[] = ADMIN_PATH . 'left';
		$aWebStructure[] = ADMIN_PATH . 'right';
		$aWebStructure[] = ADMIN_PATH . 'footer';
		$this->common->exec_view($aWebStructure);		
	}

	public function addpage()
	{
		$aData['title'] = 'Add New Page';
		$aWebStructure[] = ADMIN_PATH . 'headerextra';
		$aWebStructure[] = ADMIN_PATH . 'left';
		$aWebStructure[] = ADMIN_PATH . 'main';
		$aWebStructure[] = ADMIN_PATH . 'rightpanel';
		$aWebStructure[] = ADMIN_PATH . 'footer';
		$aData['q_all_post'] = $this->db_admin->get_page();
		$aData['images_path'] = DEF_IMAGES_PATH;
		$aData['right_panel_page'] = $this->common->exec_fetch('admin/rightpaneladdpage',$aData);		
		$aArgs['form'] = $this->common->exec_fetch('admin/addpage',$aData);
		$this->common->tinymce_editor();
		$this->common->exec_view($aWebStructure,$aArgs);	
	}
	
	public function addpost()
	{
		$aData['title'] = 'Add New Post';
		$aWebStructure[] = ADMIN_PATH . 'headerextra';
		$aWebStructure[] = ADMIN_PATH . 'left';
		$aWebStructure[] = ADMIN_PATH . 'main';
		$aWebStructure[] = ADMIN_PATH . 'rightpanel';
		$aWebStructure[] = ADMIN_PATH . 'footer';		
		$this->common->tinymce_editor();
		$aData['right_panel_page'] = $this->common->exec_fetch('admin/rightpaneladdpost');		
		$aArgs['form'] = $this->common->exec_fetch('admin/addpost',$aData);		
		$this->common->exec_view($aWebStructure,$aArgs);
	}
	
	public function page()
	{
		$aData['title'] = 'Manage Page';		
		$aWebStructure[] = ADMIN_PATH . 'header';
		$aWebStructure[] = ADMIN_PATH . 'left';
		$aWebStructure[] = ADMIN_PATH . 'right';
		$aWebStructure[] = ADMIN_PATH . 'footer';
		$aData['q_all_page'] = $this->db_admin->get_page();		
		$aData['webmaster_path'] = WEBMASTER_PATH;		
		$aArgs['content'] = $this->common->exec_fetch('admin/page',$aData);		
		$this->common->exec_view($aWebStructure,$aArgs);		
	}
	
	public function post()
	{
		$aData['title'] = 'Manage Post';	
		$aWebStructure[] = ADMIN_PATH . 'header';
		$aWebStructure[] = ADMIN_PATH . 'left';
		$aWebStructure[] = ADMIN_PATH . 'right';
		$aWebStructure[] = ADMIN_PATH . 'footer';
		$aData['q_all_post'] = $this->db_admin->get_post();
		$aArgs['content'] = $this->common->exec_fetch('admin/post',$aData);		
		$this->common->exec_view($aWebStructure,$aArgs);
	}	
}