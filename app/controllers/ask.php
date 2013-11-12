<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ask extends Main_Controller {

	/**
	 * Home页控制器
	 *
	 */
	public function index() {
		$data['name'] = 'yuwenhui';
		echo 'ask';
		$this->load->view('ask.html', $data);
	}
}