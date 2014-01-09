<?php

class Topic extends Eloquent {

	protected $table = 'topics';

	private $replyModel;
	private $userModel;

	public function __construct()
	{
		$this->replyModel = new Reply;
		$this->userModel = new User;
	}

	public function user()
	{
		return $this->belongsTo('User', 'uid');
	}

	/**
	 * getTopicList
	 *
	 * @param $order
	 * @param $perpage
	 * @return array
	 * @author
	 **/
	public function getTopicList($perPage = 10)
	{
		$result = $this->where('is_del', '=', 0)
									 ->with('user')
									 ->orderBy('created_at', 'desc')
									 ->paginate($perPage);
		if($result)
		{
			foreach($result as $key => &$value)
			{
				$value->create = $value->created_at->diffForHumans();
				$value->update = $value->updated_at->diffForHumans();
			}
		}
		return $result;
	}

	/**
	 * getTopicOne
	 *
	 * @return void
	 * @author
	 **/
	public function getTopicOne($id)
	{
		return $this->find($id);
	}


	/**
	 * getTopicShow
	 *
	 * @param $id
	 * @return void
	 * @author
	 **/
	public function getTopicShow($id)
	{
		$topic = $this->where('id', '=', $id)
									->with('user')
									->first();
		if($topic) {
			$topic->create = $topic->created_at->diffForHumans();
		}
		return $topic;
	}

	/**
	 * getTopicReply
	 *
	 * @param $id
	 * @return void
	 * @author
	 **/
	public function getTopicReply($id)
	{
		$replies = $this->replyModel->getReplyList($id);
		// if($replies)
		// {
		// 	foreach($replies as $key => &$value)
		// 	{
		// 		$value->create = $value->created_at->diffForHumans();
		// 		$value->user = $this->userModel->find($value->uid);
		// 	}
		// }
		return $replies;
	}

	/**
	 * getTopicRelated
	 *
	 * @param $id
	 * @return void
	 * @author
	 **/
	public function getTopicRelated($id)
	{
		// todo:增加分词功能，获取相关文章
		$result = $this->orderBy('created_at', 'desc')
									 ->take(10)
									 ->get();
		return $result;
	}



	public function getDateFormat()
	{
		return 'U';
	}



}