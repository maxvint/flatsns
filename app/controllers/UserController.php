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
		echo 'index';
		// $users = $this->user->orderBy('uid', 'DESC')->paginate(10);
		// return View::make('user/index', compact('users'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return void
	 * @author 
	 **/
	public function getRegister()
	{
		return View::make('user/register');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return void
	 * @author 
	 **/
	public function postRegister()
	{

		$input = Input::only('email', 'password', 'username');;
		$input['group_type'] = 2;
		$input['gid'] = 3;
		$input['is_active'] = 1;


		Eloquent::unguard();
		$user = User::create($input);
		if($user)
		{
			$session_data = array(
				'uid' => $user->id,
				'email' => $user->email,
				'password' => $user->password,
				'username' => $user->username,
				'group_type' => $user->group_type,
				'gid' => $user->gid,
				'is_active' => $user->is_active
			);
			Session::put('user', $session_data);
			Auth::loginUsingId($user->id);
			return Redirect::to('topic');
		}
	}

	/**
	 * user login
	 *
	 * @return void
	 * @author 
	 **/
	public function getLogin()
	{
		return View::make('user/login');
	}

	/**
	 * do post user login
	 *
	 * @return void
	 * @author 
	 **/
	public function postLogin()
	{
		$input = Input::all();
		$credentials = array('email' => $input['email'], 'password' => $input['password']);
		if(Auth::attempt($credentials))
		{
			return Redirect::to('topic');
		} else {
			return Redirect::to('user/login')->with('loginError', 'Incorrect Details');
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

	public function getLogout()
	{

		Auth::logout();
		return Redirect::to('user/login');
	}
}