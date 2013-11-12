<?php if (!defined('BASEPATH')) exit('No direct access allowed.');
/**
 * 基础控制器类
 */
class Base_Controller extends CI_Controller {

	public function __construct() {
		parent::__construct();
	}
}

/**
 * 前台控制器
 */
class Main_Controller extends Base_Controller {

	public function __construct() {
		parent::__construct();

		// 载入前台模板
		$this->load->set_main_theme('default');

		// 判断是否安装

		// 网站基本信息设定

		// 获取用户信息
	}
}