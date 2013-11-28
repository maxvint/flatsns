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


		// 重置表单错误定界符
		
		// 判断是否安装

		// 网站基本信息

		// 获取当前登录用户信息
		$data['user'] = $this->db->select('uid, username, avatar')->where('uid', $this->session->userdata('uid'))->get('user')->row_array();

		$this->load->vars($data);
	}

	/**
	 * 成功消息提示
	 * @param string $info 提示信息
	 * @param string $jumpurl 跳转地址，默认返回上一页
	 * @return string
	 * @author 
	 **/
	public function success($info, $jumpurl = '')
	{
		$data = array(
			'info' => $info,
			'jumpurl' => $jumpurl
		);
		$this->load->view('success.html', $data);
	}

	/**
	 * 错误消息提示
	 * @param string $info 提示信息
	 * @param string $jumpurl 跳转地址，默认返回上一页
	 * @return string
	 * @author 
	 **/
	public function error($info, $jumpurl = '')
	{
		$data = array(
			'info' => $info,
			'jumpurl' => $jumpurl
		);
		$this->load->view('error.html', $data);
	}
}