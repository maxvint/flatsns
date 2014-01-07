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
	@include('layout.wrap')
	@include('layout.footer')
</body>
</html>