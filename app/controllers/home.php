<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends Main_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	/**
	 * Home页控制器
	 *
	 */
	public function index() {
		if($this->auth->is_login())
		{
			$this->load->view('home/index.html');
		}
		else
		{
			$data['email_suffix'] = explode('|', $this->config->item('email_suffix'));
			$this->load->view('home/passport.html', $data);
		}
	}

	/**
	 * public页控制器
	 *
	 */
	
}