<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Install extends Main_Controller {

	/**
	 * Home页控制器
	 *
	 */
	public function index() {
		$data['name'] = 'install';
		$this->load->view('install/install.html', $data);
	}
}