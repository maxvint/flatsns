<?php

class UserController extends BaseController {

	protected $user;

	public function __construct(User $user)
	{
		// parent::__construct();
		$this->user = $user;
	}

	public function getIndex()
	{
		$users = $this->user->orderBy('uid', 'DESC')->paginate(10);
		return View::make('user/index', compact('users'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return void
	 * @author 
	 **/
	public function getCreate()
	{
		
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return void
	 * @author 
	 **/
	public function postCreate()
	{
		
	}

	/**
	 * Display the specified resource.
	 *
	 * @return void
	 * @author 
	 **/
	public function getShow($id)
	{
		
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function getEdit($id)
	{
		
	}
 
	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function postEdit($id)
	{
		
	}
}