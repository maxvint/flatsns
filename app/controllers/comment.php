<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Comment extends Main_Controller {

	/**
	 * Home页控制器
	 *
	 */
	public function index() {
		$data['name'] = 'yuwenhui';
		echo 'Comment';
		$this->load->view('comment.html', $data);
	}
}