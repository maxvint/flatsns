<?php

class UserController extends BaseController {

	protected $user;
	protected $topicModel;

	public function __construct(User $user)
	{
		$this->user = $user;
		$this->topicModel = new Topic;

	}

	public function getIndex()
	{
		$topics = $this->topicModel->getTopicList(10);
		return View::make('user.index', compact('topics'));

		// $users = $this->user->orderBy('uid', 'DESC')->paginate(10);
		// return View::make('user/index', compact('users'));
	}

	public function getProfile($id)
	{
			// get posted topic
		$topics = $this->topicModel->getTopicList(10);
		return View::make('user.profile', compact('topics'));
	}

	/**
	 * undocumented function
	 *
	 * @return void
	 * @author
	 **/
	public function getSetting()
	{
		return View::make('user.setting');
	}

	/**
	 * undocumented function
	 *
	 * @return void
	 * @author
	 **/
	public function getAvatar()
	{
		return View::make('user.avatar');
	}
}