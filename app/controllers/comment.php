<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Comment extends Main_Controller {

	/**
	 * Home页控制器
	 *
	 */
	public function index() {
		$data['name'] = 'comment';
		$this->load->view('topic/comment.html', $data);
	}
}