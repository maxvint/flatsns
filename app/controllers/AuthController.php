<?php

class AuthController extends BaseController {

	protected $user;
	protected $topicModel;

	public function __construct(User $user)
	{
		$this->user = $user;
		$this->topicModel = new Topic;

		// $this->beforeFilter('csrf', array('on' => 'post'));
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return void
	 * @author
	 **/
	public function getRegister()
	{
		return View::make('auth.register');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return void
	 * @author
	 **/
	public function postRegister()
	{

		$input = Input::only('email', 'password', 'username');
		$rules = array(
			'email' => 'required|unique:users|email',
			'password' => 'required|between:6,16',
		);

		$v = Validator::make($input, $rules);
		if($v->fails())
		{
			return Redirect::back()->withErrors($v)->withInput();
		}

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
				'gid' => $user->gid,
				'is_active' => $user->is_active
			);
			// Session::put('user', $session_data);
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
		return View::make('auth.login');
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
		$rules = array('email' => 'required', 'password' => 'required');
		$v = Validator::make($input, $rules);
		if($v->fails())
		{
			return Redirect::to('auth/login')->withErrors($v);
		}
		else
		{
			$credentials = array('email' => $input['email'], 'password' => $input['password']);
			if(Auth::attempt($credentials, true))
			{
				$user = User::whereEmail($input['email'])->first();
				$session_data = array(
					'uid' => $user->id,
					'email' => $user->email,
					'password' => $user->password,
					'username' => $user->username,
					'gid' => $user->gid,
					'is_active' => $user->is_active
				);
				// update session
				// Session::put('user', $session_data);
				return Redirect::intended('/');
			}
			else
			{
				return Redirect::to('auth/login')->with('loginError', 'Incorrect Details');
			}
		}
	}

	public function getLogout()
	{
		Auth::logout();
		return Redirect::to('auth/login');
	}

}