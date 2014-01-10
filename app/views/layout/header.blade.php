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
				<li{{ (Request::is('topic', 'topic/*') ? ' class="active"' : '') }}>{{ HTML::link('topic', '社区') }}</li>
			</ul>
			@if(Auth::check())
			<form class="navbar-form navbar-left hidden-sm" role="search">
				<div class="form-group">
					<input type="text" name="q" class="form-control nav-search" placeholder="输入关键字回车">
				</div>
			</form>
			@endif
			<ul class="nav navbar-nav navbar-right">
				@if(Auth::check())
				<li>
					<a href="{{ URL::to('user') }}" class="userinfo"><img src="{{ asset('img/avatar.jpg') }}" class="img-circle" width="24" height="24" alt=""> {{ $user->username }}</a>
				</li>
				<li><a href="{{ URL::to('user/setting') }}"><span class="glyphicon glyphicon-cog"></span> 设置</a></li>
				<li><a href="{{ URL::to('auth/logout') }}"><span class="glyphicon glyphicon-log-out"></span> 退出</a></li>
				@else
				<li><a href="{{ URL::to('auth/login') }}">登录</a></li>
				<li><a href="{{ URL::to('auth/register') }}">注册</a></li>
				@endif
			</ul>
		</div>
	</div>
</div>