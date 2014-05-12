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
			<div class="name"><h2>张慧</h2></div>
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
		<div class="col-xs-12 col-sm-8 col-md-8">

			<div class="topic-list">
				<div class="tab-nav">
					<h4>最近创建的话题</h4>
				</div>
				<div class="topic-line">
					@foreach($topics as $topic)
					<div class="item">
						<div class="time">{{ $topic->create }}</div>
						<h4><a href="{{ URL::to('topic/show/'.$topic->id) }}">{{ $topic->title }}</a></h4>
					</div>
					@endforeach
				</div>
			</div>

			<div class="topic-list">
				<div class="tab-nav">
					<h4>最近回复的话题</h4>
				</div>
				<div class="topic-line">
					@foreach($topics as $topic)
					<div class="item">
						<div class="time">{{ $topic->create }}</div>
						<h4><a href="{{ URL::to('topic/show/'.$topic->id) }}">{{ $topic->title }}</a></h4>
					</div>
					@endforeach
				</div>
			</div>
		</div>

		<div class="col-xs-12 col-sm-4 col-md-4">
			<div class="panel panel-default hidden-xs">
				<div class="panel-heading">
					<h3 class="panel-title">这是什么网站？</h3>
				</div>
				<div class="panel-body">
					<a href="{{ URL::to('topic/create') }}" class="btn btn-primary"><i class="glyphicon glyphicon-pencil"></i> 发起话题</a>
				</div>
			</div><!-- about -->
		</div>
	</div>
</div>
@stop