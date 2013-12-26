<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<title>FlatSNS - 移动社区</title>
	<meta content="" name="keywords">
	<meta content="....." name="description">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<link type="image/x-icon" href="/img/favicon.ico" rel="shortcut icon">
	<link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
	<link href="{{ asset('css/module.css') }}" rel="stylesheet">
	<script>
	var SITE_URL = "{{ URL::to('/') }}";
	</script>
	<script src="{{ asset('js/sea.js') }}"></script>
</head>
<body>
	<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="sr-only">导航</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				{{ HTML::link('/', 'FlatSNS', array('class' => 'navbar-brand')) }}
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav">
					<li{{ (Request::is('/') ? ' class="active"' : '') }}>{{ HTML::link('/', '首页') }}</li>
					<li{{ (Request::is('topic', 'topic/*') ? ' class="active"' : '') }}>{{ HTML::link('topic', '话题') }}</li>
					<li{{ (Request::is('user', 'user/*') ? ' class="active"' : '') }}>{{ HTML::link('user', '用户') }}</li>
				</ul>
				<form class="navbar-form navbar-left hidden-sm" role="search">
					<div class="form-group">
						<input type="text" name="q" class="form-control nav-search" placeholder="输入关键字回车">
					</div>
				</form>
				<ul class="nav navbar-nav navbar-right">
					@if(Auth::check())
					<!-- <li class="dropdown">
						<a href="#" class="dropdown-toggle userinfo" data-toggle="dropdown">
							<img src="{{ asset('img/avatar.jpg') }}" class="img-circle" width="24" height="24" alt="">
							{{ $user['username'] }}<b class="caret"></b>
						</a>
						<ul class="dropdown-menu">
								<li><a href="#"><span class="glyphicon glyphicon glyphicon-cog"></span> 设置</a></li>
								<li><a href="#">Another action</a></li>
								<li><a href="#"><span class="glyphicon glyphicon-map-marker"></span> Something</a></li>
								<li><a href="#"><span class="glyphicon glyphicon-off"></span> Separated link</a></li>
								<li class="divider"></li>
						</ul>
					</li> -->
					<li>
						<a href="#" class="userinfo" data-toggle="dropdown"><img src="{{ asset('img/avatar.jpg') }}" class="img-circle" width="24" height="24" alt=""> {{ $user['username'] }}</a>
					</li>
					<li><a href="{{ URL::to('user/logout') }}"><span class="glyphicon glyphicon-off"></span> 退出</a></li>
					@else
					<li><a href="{{ URL::to('user/login') }}">登录</a></li>
					<li><a href="{{ URL::to('user/register') }}">注册</a></li>
					@endif
					
					
				</ul>
			</div><!--/.nav-collapse -->
		</div>
	</div>

	<div class="container main">
	@yield('content')
	</div>
</body>
</html>