<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<title>Flateam - 轻量项目管理</title>
	<meta content="" name="keywords">
    <meta content="....." name="description">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link type="image/x-icon" href="/img/favicon.ico" rel="shortcut icon">
	<link rel="stylesheet" href="__PUBLIC__/css/reset.css">
	<link rel="stylesheet" href="__PUBLIC__/css/global.css">
	<link rel="stylesheet" href="__PUBLIC__/css/animation.css">
	<link rel="stylesheet" href="__PUBLIC__/css/module.css">

	

	<script>
	/**
	 * 全局变量
	 */
	var SITE_URL  = '<?php echo SITE_URL; ?>';
	var UPLOAD_URL= '<?php echo UPLOAD_URL; ?>';
	var THEME_URL = '__PUBLIC__';
	var APPNAME   = '<?php echo APP_NAME; ?>';
	</script>
	<script type="text/javascript" src="__PUBLIC__/js/jquery.1.9.0.min.js"></script>
	<script type="text/javascript" src="__PUBLIC__/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="__PUBLIC__/js/core.js"></script>
	<script type="text/javascript" src="__PUBLIC__/js/module.js"></script>
</head>
<body>
	<header class="navbar navbar-default navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container">
				<a class="brand" href="/" title="">FlatSNS</a>
				<ul class="nav navbar-nav">
					<li><a href="./">首页</a></li>
					<li><a href="<?php echo SITE_URL;?>/?m=ask&a=Index">问答</a></li>
					<li><a href="./project">项目</a></li>
					<li><a href="./task">任务</a></li>
					<li>><a href="./demand">需求</a></li>
					<li><a href="./bug">Bug</a></li>
				</ul>
			</div>
		</div>
	</header>

{__URL__}

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

<div><li><a href="__URL__&act=index">全局设置</a></li></div>