<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * 用户模块控制器
 *
 */
class User extends Main_Controller {

	/**
	 * 首页
	 *
	 */
	public function index() {
		$data['name'] = 'yuwenhui';
		echo 'user';
		$this->load->view('user.html', $data);
	}

	/**
	 * 注册
	 *
	 */
	public function register() {
		
		$this->load->view('register.html');
	}

	/**
	 * 登录
	 *
	 */
	public function login() {
		$data['title'] = '用户登录';
		$data['referer'] = $this->input->get('referer', true);
		$data['referer'] = $data['referer'] ? $data['referer'] : $this->input->server('HTTP_REFERER');

		if($_POST) {
			$email = $this->input->post('email', true);
			$password = $this->input->post('password', true);
		}
		// header("location: ".$data['referer']);
		// exit();

		$this->load->view('login.html', $data);
	}

}