<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ui extends Main_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	/**
	 * 首页控制器
	 *
	 */
	public function index() {
		$this->load->view('ui/index.html');
	}
	
}