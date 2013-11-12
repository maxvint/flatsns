<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Setting extends Main_Controller {

	/**
	 * Home页控制器
	 *
	 */
	public function index() {
		$data['name'] = 'yuwenhui';
		echo 'Setting';
		$this->load->view('setting.html', $data);
	}
}