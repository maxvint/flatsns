<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * 用户模块控制器
 *
 */
class User_model extends MY_Model
{

	function __construct()
	{
		parent::__construct();
	}

	function register($data)
	{
		return $this->db->insert('user', $data);
	}

	function chk_reg($email)
	{
		$query = $this->db->get_where('user', array('email' => $email));
        return $query->row_array();
	}

	function chk_login($email, $password)
	{
		$query = $this->db->get_where('user', array('email'=>$email, 'password'=>md5($password)));
		$result = $query->row_array();
		if(@$result['uid'])
		{
			$this->db->where('uid', @$result['uid'])->update('user', array('lastlogin'=>time()));
		}
		return $result;
	}

	function update_user($uid, $data)
	{
		$this->db->where('uid', $uid);
  		$this->db->update('user', $data); 
		return ($this->db->affected_rows() > 0) ? TRUE : FALSE;
	}

	function update_pwd($data)
	{
		$this->db->where('uid', $data['uid']);
		$this->db->where('password', $data['password']);
		$this->db->update('user', array('password'=>$data['newpassword']));
		return $this->db->affected_rows();
	}
}
