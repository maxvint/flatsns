<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<title>FlatSNS - 移动社区</title>
	<meta content="" name="keywords">
	<meta content="....." name="description">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<link type="image/x-icon" href="/img/favicon.ico" rel="shortcut icon">
	<?php echo HTML::style('css/bootstrap.css'); ?>
	<?php echo HTML::style('css/module.css'); ?>
	<?php echo HTML::script('js/sea.js', array('data-config' => 'config', 'data-main' => 'main')) ?>
</head>
<body>
	<div class="navbar navbar-fixed-top navbar-inverse" role="navigation">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="sr-only">导航</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="" class="navbar-brand"></a>
				{{ HTML::link('/', 'FlatSNS', array('class' => 'navbar-brand')) }}
			</div>
			<div class="collapse navbar-collapse">
				<ul class="nav navbar-nav">
					<li class="active">{{ HTML::link('/', '首页') }}</li>
					<li>{{ HTML::link('/topics', '话题') }}</li>
					<li>{{ HTML::link('/users', '用户') }}</li>
					<li>{{ HTML::link('/ui', 'UI模板') }}</li>
				</ul>
			</div>
	  </div>
	</div>
	@yield('content')
</body>
</html>