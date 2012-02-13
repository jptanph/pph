<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Common
{

    private $_CI;
    private $_aInfo = array();
	
	public function __construct()
	{
		$this->_CI =& get_instance();
	}
	
    public function init_env()
    {
		define('FRONT_PATH' , 'front/');
		define('ADMIN_PATH' , 'admin/');
		define('THIRD_PARTY_SOFT',$this->_CI->config->item('base_url') . '/3rdpartysoftware/');		
		define('DEF_CSS_PATH' , $this->_CI->config->item('base_url') . '/css/');
		define('DEF_JS_PATH' , $this->_CI->config->item('base_url') . '/js/');
		define('DEF_IMAGES_PATH' , $this->_CI->config->item('base_url') . '/images/');
		define('BASE_URL' , $this->_CI->config->item('base_url'));
		define('WEBMASTER_PATH',$this->_CI->config->item('base_url') . '/webmaster/');
		define('ADMIN_EXEC_PATH',$this->_CI->config->item('base_url') . '/admin_exec/');
		define('JQUERY_COMMON',DEF_JS_PATH . 'jquery-1.6.4.js');
		$this->_aInfo['webmaster_path'] = WEBMASTER_PATH;
		$this->_aInfo['jquery_common'] = JQUERY_COMMON;
		$this->_aInfo['admin_exec_path'] = ADMIN_EXEC_PATH;
		$this->_aInfo['js_path'] = DEF_JS_PATH;		
		$this->_aInfo['css_path'] = DEF_CSS_PATH;
		$this->_aInfo['images_path'] = DEF_IMAGES_PATH;
		$this->_aInfo['base_url'] = BASE_URL;
    }
	
	public function exec_view( $aArgs , $aOptArgs = array())
	{
		$this->_aInfo['args'] = $aOptArgs;
		
		foreach($aArgs as $rows)
		{
			$this->_CI->load->view( $rows,$this->_aInfo);
		}
	}
	
	public function elrte_editor()
	{
		$sEditor = '';		
		$sEditor.="<script src='".THIRD_PARTY_SOFT."elrte-1.2/js/jquery-1.4.4.min.js' type='text/javascript' charset='utf-8'></script>\n";
		$sEditor.="<script src='".THIRD_PARTY_SOFT."elrte-1.2/js/jquery-ui-1.8.7.custom.min.js' type='text/javascript' charset='utf-8'></script>\n";
		$sEditor.="<link rel='".THIRD_PARTY_SOFT."elrte-1.2/stylesheet' href='elrte-1.2/css/smoothness/jquery-ui-1.8.7.custom.css' type='text/css' media='screen' charset='utf-8'>\n";
		$sEditor.="<script src='".THIRD_PARTY_SOFT."elrte-1.2/js/elrte.min.js' type='text/javascript' charset='utf-8'></script>\n";
		$sEditor.="<link rel='stylesheet' href='".THIRD_PARTY_SOFT."elrte-1.2/css/elrte.min.css' type='text/css' media='screen' charset='utf-8'>\n";
		$sEditor.="<script src='".THIRD_PARTY_SOFT."elrte-1.2/js/i18n/elrte.ru.js' type='text/javascript' charset='utf-8'></script>\n";
		
		$sEditor.="<script type='text/javascript' charset='utf-8'>\n";
		$sEditor.="	$(document).ready(function(){\n";
		$sEditor.="	var opts = {\n";
		$sEditor.="		cssClass : 'el-rte',\n";
		$sEditor.="		height   : 300,\n";
		$sEditor.="		toolbar  : 'complete',\n";
		$sEditor.="		cssfiles : ['".THIRD_PARTY_SOFT."elrte-1.2/css/elrte-inner.css']\n";
		$sEditor.="		}\n";
		$sEditor.="			$('#content').elrte(opts);\n";
		$sEditor.="	})\n";
		$sEditor.="</script>\n";	
		
		$this->_aInfo['elrte_editor'] = $sEditor;
	}
	
	public function tinymce_editor()
	{
		$sEditor = '';
		
		$sEditor.="<script type='text/javascript' src='".THIRD_PARTY_SOFT."tinymce/jscripts/tiny_mce/jquery.tinymce.js'></script>\n";
		$sEditor.="<script type='text/javascript'>\n";
		
		$sEditor.="	$().ready(function(){\n";
		$sEditor.="		$('.tinymce').tinymce({\n";
		$sEditor.="			script_url : '".THIRD_PARTY_SOFT."tinymce/jscripts/tiny_mce/tiny_mce.js',\n";

		$sEditor.="			theme : 'advanced',\n";
		$sEditor.="			plugins : 'autolink,lists,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template,advlist',\n";
		$sEditor.="			theme_advanced_buttons1 : 'save,newdocument,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,styleselect,formatselect,fontselect,fontsizeselect',\n";
		$sEditor.="			theme_advanced_buttons2 : 'cut,copy,paste,pastetext,pasteword,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,cleanup,help,code,|,insertdate,inserttime,preview,|,forecolor,backcolor',\n";
		$sEditor.="			theme_advanced_buttons3 : 'tablecontrols,|,hr,removeformat,visualaid,|,sub,sup,|,charmap,emotions,iespell,media,advhr,|,print,|,ltr,rtl,|,fullscreen',\n";
		$sEditor.="			theme_advanced_buttons4 : 'insertlayer,moveforward,movebackward,absolute,|,styleprops,|,cite,abbr,acronym,del,ins,attribs,|,visualchars,nonbreaking,template,pagebreak',\n";
		$sEditor.="			theme_advanced_toolbar_location : 'top',\n";
		$sEditor.="			theme_advanced_toolbar_align : 'left',\n";
		$sEditor.="			theme_advanced_statusbar_location : 'bottom',\n";
		$sEditor.="			theme_advanced_resizing : true,\n";
		$sEditor.="			content_css : '".THIRD_PARTY_SOFT."tinymce/examples/css/content.css'\n";
			
			
		$sEditor.="		});\n";
		
		$sEditor.="});\n";
		$sEditor.="</script>\n";		
		$this->_aInfo['tinymce_editor'] = $sEditor;
		
	}
	
	public function exec_fetch($sPath,$aData = array())
	{
		return $this->_CI->load->view( $sPath , $aData , TRUE );
	}
	
	public function vd($var)
	{
		echo "<pre>";
			var_dump($var);
		echo"</pre>";	
	}
	
	public function param_bar($var)
	{
		$aImplode = explode(' ',$var);
		return strtolower(implode(	$aImplode,'-'));
	}
	
	public function param_space($var)
	{
		$aImplode = explode('/',$var);
		return strtolower(implode(	$aImplode,'-'));
	}
	
}

