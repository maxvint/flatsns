<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Topic extends Main_Controller {

	/**
	 * 首页控制器
	 *
	 */
	public function index() {
		$data['name'] = 'topic';
		$this->load->view('topic/index.html', $data);
	}
}