<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * 用户模块控制器
 *
 */
class User extends Main_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
		$this->load->library('myclass');
	}

	/**
	 * 首页
	 *
	 */
	public function index()
	{
		$data['name'] = 'yuwenhui';
		echo 'user';


		$this->load->view('user.html', $data);
	}

	/**
	 * 注册
	 *
	 */
	public function register()
	{
		// 加载form类
		$this->load->helper('form');
		$data['title'] = '新用户注册';
		$data['email_suffix'] = explode('|', $this->config->item('email_suffix'));
		if($this->auth->is_login())
		{
			$this->error('已登录，请退出再注册');
		}

		if($_POST && $this->validate_reg_form())
		{
			$username = strip_tags($this->input->post('username', true));
			$email = $this->input->post('email' ,true);
			(empty($username)) ? $username = preg_replace('/@.*/', '', $email) : $username = $username;
			$ip = $this->myclass->get_ip();
			$data = array(
				'email' => $email,
				'password' => md5($this->input->post('password', true)),
				'username' => $username,
				'ip' => $ip,
				'group_type' => 2,
				'gid' => 3,
				'regtime' => time(),
				'is_active' => 1
			);

			if($this->user_model->register($data))
			{
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
				// 去除session ？？？
				// $this->session->unset_userdata('yzm');
			}
			redirect();
		}
		$this->load->view('register.html', $data);
	}

	/**
	 * 登录
	 *
	 */
	public function login()
	{
		$data['title'] = '用户登录';
		$data['referer'] = $this->input->get('referer', true);
		$data['referer'] = $data['referer'] ? $data['referer'] : $this->input->server('HTTP_REFERER');
		$data['email_suffix'] = explode('|', $this->config->item('email_suffix'));
		if($_POST)
		{
			$email = $this->input->post('email', true);
			$password = $this->input->post('password', true);
			$user = $this->user_model->chk_login($email, $password);
			if(count($user))
			{
				//更新session
				$session_data = array(
					'uid' => $user['uid'],
					'email' => $user['email'],
					'username' => $user['username'],
					'password' => $user['password'],
					'group_type' => $user['group_type'],
					'gid' => $user['gid']
				);
				$this->session->set_userdata($session_data);
				//设置cookie
				$cookie = array(
					'name'   => 'uid',
					'value'  => $user['uid'],
					'expire' => '86400',
					'domain' => '.'.$this->myclass->get_domain(site_url()),
					'path'   => '/'
				);
				$this->input->set_cookie($cookie);
				$cookie = array(
					'name'   => 'email',
					'value'  => $user['email'],
					'expire' => '86400',
					'domain' => '.'.$this->myclass->get_domain(site_url()),
					'path'   => '/'
				);
				$this->input->set_cookie($cookie);
				$cookie = array(
					'name'   => 'password',
					'value'  => $user['password'],
					'expire' => '86400',
					'domain' => '.'.$this->myclass->get_domain(site_url()),
					'path'   => '/'
				);
				$this->input->set_cookie($cookie);
				$cookie = array(
					'name'   => 'group_type',
					'value'  => $user['group_type'],
					'expire' => '86400',
					'domain' => '.'.$this->myclass->get_domain(site_url()),
					'path'   => '/'
				);
				$this->input->set_cookie($cookie);
				$cookie = array(
					'name'   => 'gid',
					'value'  => $user['gid'],
					'expire' => '86400',
					'domain' => '.'.$this->myclass->get_domain(site_url()),
					'path'   => '/'
				);
				$this->input->set_cookie($cookie);
				header("location: ".$data['referer']);
				exit();
			}
			else
			{
				$this->error('用户名或密码错误!');
			}
		}
		else
		{
			$this->load->view('login.html', $data);
		}
	}

	/**
	 * 登录
	 *
	 */
	public function logout()
	{
		$this->session->sess_destroy();
		$this->load->helper('cookie');
		delete_cookie('uid');
		delete_cookie('username');
		delete_cookie('password');
		delete_cookie('group_type');
		delete_cookie('gid');
		header("location: ".site_url('home/index'));
		exit;
	}

	/**
	 * 判断邮箱是否注册
	 *
	 * @return void
	 * @author 
	 **/
	public function chk_reg($email)
	{
		$chk_reg = $this->user_model->chk_reg($email);
		if($chk_reg)
		{
			$login_url = base_url('user/login');
			$this->form_validation->set_message('chk_reg', '邮箱已注册，请您直接<a href="'.$login_url.'">登录</a>！');
			return false;
		}
		else
		{
			return true;
		}
	}

	/**
	 * 检查密码是否一致
	 *
	 * @return void
	 * @author 
	 **/
	public function chk_pwd($repassword, $password)
	{
	}

	private function validate_reg_form()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('', '');
		$this->form_validation->set_rules('email', '邮箱', 'trim|required|min_length[3]|max_length[50]|valid_email|callback_chk_reg');
		$this->form_validation->set_rules('password', '用户密码', 'trim|required|min_length[6]|max_length[40]');
		$this->form_validation->set_rules('repassword', '密码验证', 'trim|required|min_length[6]|max_length[40]|matches[password]');
		$this->form_validation->set_message('required', '%s不能为空！');
		$this->form_validation->set_message('min_length', '%s最小长度不少于 %s 个字符或汉字！');
		$this->form_validation->set_message('max_length', '%s最大长度不多于 %s 个字符或汉字！');
		$this->form_validation->set_message('matches', '两次密码不一致');
		$this->form_validation->set_message('valid_email', '邮箱格式不对');
		$this->form_validation->set_message('alpha_dash', '邮箱格式不对');
		
		if($this->form_validation->run() == FALSE)
		{
			return false;
		}
		else
		{
			return true;
		}
	}

}