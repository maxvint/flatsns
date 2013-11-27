<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Topic extends Main_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('topic_model');
		$this->load->library('myclass');
		$this->load->library('pagination');
	}

	/**
	 * 首页控制器
	 *
	 */
	public function index($page = 1)
	{

		// 分页
		$limit = 10;
		$config['uri_segment'] = 4;
		$config['use_page_numbers'] = TRUE;
		$config['base_url'] = site_url('topic/index/');
		$config['total_rows'] = $this->topic_model->get_topic_count();
		$config['per_page'] = $limit;
		$config['first_link'] ='首页';
		$config['last_link'] ='尾页';
		$config['num_links'] = 10;

		$this->load->library('pagination');
		$this->pagination->initialize($config);
		
		$start = ($page-1)*$limit;
		$data['pagination'] = $this->pagination->create_links();

		$data['list'] = $this->topic_model->get_topic_list($start, $limit);

		// print_r($data);
		$this->load->view('topic/index.html', $data);
	}

	/**
	 * 发布话题
	 *
	 */
	public function post()
	{

		if(!$this->auth->is_login())
		{
			$this->error('请先登录');
			redirect('user/login/');
		}
		else
		{
			if($_POST)
			{
				$uid = $this->session->userdata('uid');
				$data = array(
					'uid' => $uid,
					'title' => $this->input->post('title'),
					'content' => $this->input->post('content'),
					'addtime' => time(),
					'updatetime' => time(),
					'lastreply' => time(),
					'views' => 0,
					'status' => 1
				);
				if($this->topic_model->add($data))
				{
					//最新贴子tid
					$new_tid = $this->db->insert_id();


					redirect('topic/view/'.$new_tid);
				}
			}
			else
			{
				$data['name'] = 'post';
				$this->load->view('topic/post.html', $data);
			}
		}

			
	}

	/**
	 * 话题内容
	 *
	 */
	public function view($tid)
	{
		$topic = $this->topic_model->get_topic_by_tid($tid);
		if(!$topic)
		{
			$this->error('抱歉，帖子可能正在审核');
		}
		else
		{
			$data['topic'] = $topic;
			$this->load->view('topic/view.html', $data);
		}
			
	}

}