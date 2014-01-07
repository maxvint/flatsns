<?php

class TopicController extends BaseController {

	protected $topic;
	protected $reply;
	protected $user;

	public function __construct(Topic $topic, Reply $reply, User $user)
	{
		$this->topic = $topic;
		$this->reply = $reply;
		$this->user = $user;
	}

	public function getIndex()
	{
		$topics = $this->topic->getTopicList();
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
		$topic = $this->topic->getTopicShow($id);
		if($topic)
		{
			// get reply list
			$replies = $this->topic->getTopicReply($id);

			// get related list
			$relates = $this->topic->getTopicRelated($id);
			return View::make('topic/view', compact('topic', 'replies', 'relates'));
		}
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
		$topic = $this->topic->getTopicOne($id);
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
		$topic = $this->topic->getTopicOne($id);
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
		$topic = $this->topic->getTopicOne($id);
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
		$topic = $this->topic->getTopicOne($id);
		if(empty($topic))
		{
			return Redirect::to('topic');
		}
	}

}