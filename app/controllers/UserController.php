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
		if (Auth::check())
		{
			return View::make('user.index');
		}
		else
		{
			return View::make('user.login');
		}
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
		return View::make('user.register');
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
		return View::make('user.login');
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
			return Redirect::to('user/login')->withErrors($v);
		}
		else
		{
			$credentials = array('email' => $input['email'], 'password' => $input['password']);
			if(Auth::attempt($credentials))
			{
				$user = User::find(Auth::user()->id);
				$session_data = array(
					'uid' => $user->id,
					'email' => $user->email,
					'password' => $user->password,
					'username' => $user->username,
					'gid' => $user->gid,
					'is_active' => $user->is_active
				);
				Session::flash('user', $session_data);
				return Redirect::to('topic');
			}
			else
			{
				return Redirect::to('user/login')->with('loginError', 'Incorrect Details');
			}
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