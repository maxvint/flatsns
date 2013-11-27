<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Topic extends Main_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('topic_model');
		$this->load->library('pagination');

	}

	/**
	 * 首页控制器
	 *
	 */
	public function index()
	{


		$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		$config['base_url'] = site_url('topic/index/');
		$config['total_rows'] = $this->topic_model->get_topic_count(); 
		$config['per_page'] = 10;

		$this->pagination->initialize($config);
		$data = array(
			'pagination' => $this->pagination->create_links(),
			'list' => $this->topic_model->get_topic_list($page, $config['per_page'])
		);

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