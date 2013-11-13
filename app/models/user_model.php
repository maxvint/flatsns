<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * 用户模块控制器
 *
 */
class User_model extends MY_Model {

	function __construct() {
		parent::__construct();
	}

	function register($data) {
		return $this->db->insert('users', $data);
	}
}
