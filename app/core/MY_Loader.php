<?php if (!defined('BASEPATH')) exit('No direct access allowed.');
class MY_Loader extends CI_Loader {
	public function __construct() {
		parent::__construct();
		// 加载模板路径
        $this->_ci_view_paths = array('themes/' => TRUE);
	}

	// 加载前台模板
	public function set_main_theme($theme = 'default') {
		$this->_ci_view_paths = array(FCPATH.'themes/'.$theme.'/' => TRUE);
	}

	// 加载后台模板
	public function set_admin_theme($theme = 'admin') {
		$this->_ci_view_paths = array(FCPATH.'themes/admin/' => TRUE);
	}
}