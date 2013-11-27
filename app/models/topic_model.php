<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * 话题模块控制器
 *
 */
class Topic_model extends MY_Model
{

	function __construct()
	{
		parent::__construct();
	}

	function get_topic_list($page, $limit)
	{
		$this->db->select('*');
		$this->db->from('topic');
		$this->db->where('status = 1');
		$this->db->order_by('is_top', 'DESC');
		$this->db->order_by('addtime', 'DESC');
		$this->db->limit($limit, $page);
		$query = $this->db->get();
		if($query->num_rows() > 0)
		{
			return $query->result_array();
		}
	}

	function get_topic_by_tid($tid)
	{
		$query = $this->db->get_where('topic', array('tid' => $tid));
        return $query->row_array();
	}

	function get_topic_count()
	{
		$this->db->select('tid');
		$query = $this->db->get_where('topic');
		foreach($query->result() as $row)
		{
		    return $row->tid;
		}
	}




	function add($data)
	{
		return $this->db->insert('topic', $data);
	}

	

	function update_user($uid, $data)
	{
		$this->db->where('uid', $uid);
  		$this->db->update('topic', $data); 
		return ($this->db->affected_rows() > 0) ? TRUE : FALSE;
	}



	
}
