<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * 用户模块控制器
 *
 */
class Auth
{
	/**
	 * 用户
	 *
	 * @access private
	 * @var array
	 **/
	private $_user = array();

	/**
	 * 是否已经登录
	 *
	 * @access private
	 * @var boolean
	 **/
	private $_hasLogin = NULL;

	/**
	 * 用户组
	 *
	 * @access public
	 * @var array
	 **/
	public $groups = array(
		'administrator' => 0,
		'editor' => 1,
		'contributor' => 2
	);

	/**
	 * CI句柄
	 *
	 * @access private
	 * @var object
	 **/
	private $_CI;

	/**
     * 构造函数
     * 
     * @access public
     * @return void
     */
    public function __construct()
    {
        /** 获取CI句柄 */
		$this->_CI = &get_instance();
		$this->_CI->load->model('user_model');
		$this->_user = unserialize($this->_CI->session->userdata('user'));
		log_message('debug', "STBLOG: Authentication library Class Initialized");
    }

    /**
     * 判断用户是否已经登录
     *
     * @access public
     * @return void
     */

	public function is_login()
	{
		$uid = $this->_CI->session->userdata('uid');
		$password = $this->_CI->session->userdata('password');
		if(empty($password))
		{
			$query = $this->_CI->db->get_where('user', array('uid' => $uid));
		}
		else
		{
			$query = $this->_CI->db->get_where('user', array('uid' => $uid, 'password' => $password));
		}
		if(!count($query->row()))
		{
			$user['lastlogin'] = time();
			$user['token'] = sha1(time().rand());
			$this->_CI->user_model->update_user($uid, $user);
			return false;
		}
		else
		{
			return true;
			
		}
	}
}