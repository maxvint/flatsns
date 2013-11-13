<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * 用户模块控制器
 *
 */
class User extends Main_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('user_model');
	}

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
		// 加载form类
		$this->load->helper('form');

		$data['title'] = '新用户注册';

		if($_POST) {

			$data = array(
				'email' => $this->input->post('email' ,true),
				'password' => md5($this->input->post('password', true)),
				'username' => strip_tags($this->input->post('username', true)),
				'group_type' => 2,
				'gid' => 3,
				'regtime' => time(),
				'is_active' => 1
			);

			if($this->user_model->register($data)) {
				$uid = $this->db->insert_id();
				$session_data = array(
					'uid' => $uid,
					'email' => $data['email'],
					'password' => $data['password'],
					'username' => $data['username'],
					'group_type' => $data['group_type'],
					'gid' => $data['gid']
				);
				$this->session->set_userdata($session_data);

				$this->session->unset_userdata('yzm');
			}
			redirect();

		}
		$this->load->view('register.html', $data);
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