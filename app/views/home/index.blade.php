@extends('layout.application')

@section('content')
<script language="javascript">
	seajs.use('app/main', function(main) {
		main.load('user');
	});
</script>

<div class="container-inline top">
	<div class="bar"></div>
	<div class="container">
		<div class="user-info">
			<div class="avatar">
				<a href=""><img src="{{ asset('img/avatar-1.jpg') }}" class="img-circle" width="160" height="160"></a>
			</div>
			<div class="name"><h2>{{ $user->username }}</h2></div>
			<div class="profile">
				<span class="pull-right"></span>
				<p>{{ $user->update }}</p>
				<p>签名: 误打误撞进了IT圈</p>
				<a href="" class="btn btn-primary"><i class="glyphicon glyphicon-plus"></i> 加关注</a>
			</div>
		</div>
	</div>
</div>

<div class="container">
	<div class="row">
		<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	</div>
</div>
@stop