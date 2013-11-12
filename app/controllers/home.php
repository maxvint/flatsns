<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends Main_Controller {

	/**
	 * Home页控制器
	 *
	 */
	public function index() {
		$data['name'] = 'yuwenhui';
		echo 'home';
		$this->load->view('home.html', $data);
	}
}