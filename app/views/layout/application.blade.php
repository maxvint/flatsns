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
					<li{{ (Request::is('topic/index') ? ' class="active"' : '') }}>{{ HTML::link('topic/index', '话题') }}</li>
					<li{{ (Request::is('user/index') ? ' class="active"' : '') }}>{{ HTML::link('user/index', '用户') }}</li>
				</ul>
				<form class="navbar-form navbar-left hidden-sm" role="search">
					<div class="form-group">
						<input type="text" name="q" class="form-control nav-search" placeholder="输入关键字回车">
					</div>
      	</form>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="#">登录</a></li>
	      	<li><a href="#">注册</a></li>
	      	<li class="dropdown">
	        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
		        <ul class="dropdown-menu">
		          	<li><a href="#">Action</a></li>
		          	<li><a href="#">Another action</a></li>
		          	<li><a href="#">Something else here</a></li>
		          	<li class="divider"></li>
		          	<li><a href="#">Separated link</a></li>
		        </ul>
	      	</li>
				</ul>
			</div><!--/.nav-collapse -->
		</div>
	</div>

	<div class="container main">
	@yield('content')
	</div>
</body>
</html>