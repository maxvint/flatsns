<?php

class TopicController extends BaseController
	{

	protected $topic;
	protected $reply;

	public function __construct(Topic $topic, Reply $reply, User $user)
	{
		// parent::__construct();
		$this->topic = $topic;
	}

	public function getIndex()
	{
		$topics = $this->topic->orderBy('created_at', 'DESC')->paginate(15);
		if($topics)
		{
			foreach ($topics as $key => &$value)
			{
				$value->update = Carbon::createFromTimeStamp(strtotime($value->updated_at))->diffForHumans();
			}
		}
		return View::make('topic/index', compact('topics'));
	}

	/**
	 * Display the specified resource.
	 *
	 * @return void
	 * @author
	 **/
	public function getShow($id)
	{

		$topic = Topic::find($id);
		if($topic)
		{
			$userModel = new User;
			$topic->user = $userModel->getUserById($topic->uid);
			$topic->create = Carbon::createFromTimeStamp(strtotime($topic->created_at))->diffForHumans();

			// 获取回复
			$replies = Reply::where('pid', '=', $id)->orderBy('created_at', 'DESC')->take(10)->get();
			foreach ($replies as $key => $value) {
				$value->create = Carbon::createFromTimeStamp(strtotime($value->created_at))->diffForHumans();
				$value->user = $userModel->getUserById($value->uid);
			}

			// 获取相关话题
			$relates = Topic::orderBy('created_at', 'DESC')->take(10)->get();
			// print_r($relates);
		}
		return View::make('topic/view', compact('topic', 'replies', 'relates'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return void
	 * @author
	 **/
	public function getCreate()
	{
		return View::make('topic/create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return void
	 * @author
	 **/
	public function postCreate()
	{
		$this->topic->uid = Auth::user()->id;
		$this->topic->title = Input::get('title');
		$this->topic->content = Input::get('content');
		if($this->topic->save())
		{
			return Redirect::to('topic/show/'.$this->topic->id);
		}
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function getEdit($id)
	{
		$topic = Topic::find($id);
		return View::make('topic/edit', compact('topic'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function postEdit($id)
	{
		$topic = Topic::find($id);
		$topic->title = Input::get('title');
		$topic->content = Input::get('content');
		$topic->updated_at = time();
		if($topic->save())
		{
			return Redirect::to('topic/show/'.$topic->id);
		}
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function getDelete($id)
	{
		$topic = Topic::find($id);
		return View::make('topic/delete', compact('topic'));
	}

	/**
		 * Remove the specified resource from storage.
		 *
		 * @param  int  $id
		 * @return Response
		 */
	public function postDelete($id)
	{
		Topic::destroy($id);
		$topic = Topic::find($id);
		if(empty($topic))
		{
			return Redirect::to('topic');
		}
	}

}