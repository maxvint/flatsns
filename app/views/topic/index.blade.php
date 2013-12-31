@extends('layout.application')

@section('content')
<script language="javascript">
	seajs.use('app/main', function(main) {
		main.load('topic');
	});
</script>
<div class="row">
	<div class="col-xs-12 col-sm-8 col-md-8">
		<!-- <div class="jumbotron">
			<h2>Hello, world!</h2>
			<p>This is an example to show the potential of an offcanvas layout pattern in Bootstrap. </p>
		</div> -->
		<div class="topic-list">
			<div class="tab-nav">
				<h4>最新话题</h4>
				<nav class="pull-right sub-tab">
						<a class="active" href="http://segmentfault.com/">最新的</a>
						<a href="http://segmentfault.com/hottest">热门的</a>
						<a href="http://segmentfault.com/unanswered">未回答的</a>
						<a href="{{ URL::to('topic/create') }}" class="btn btn-sm btn-success"><span class="glyphicon glyphicon-plus"></span>发布话题</a>
						<a href="{{ URL::to('topic/create') }}" id="aaa" class="btn btn-sm btn-success" event-args="id=33">发布话题</a>
				</nav>
			</div>
			<div id="content">
				@foreach($topics as $topic)
				<article class="post">
					<div class="avatar">
						<a href="{{ URL::to('topic/show/') }}"><img src="{{ asset('img/avatar.jpg') }}" class="img-circle" width="60" height="60" alt=""></a>
					</div>
					<div class="summary">
						<h4><a href="{{ URL::to('topic/show/'.$topic->id) }}">{{	$topic->title }}</a></h4>
						<span class="pull-right badge">{{ $topic->replies }}</span>
						
						<div class="meta">
							<span class="views"><i class="i-view"></i> {{ $topic->replies }} 个回复</span>
							<span class="datetime"><i class="i-time"></i> {{ $topic->update }}</span>
						</div>
					</div>
				</article>
				@endforeach
				{{ $topics->links() }}
			</div>
		</div>
	</div>
	
	<div class="col-xs-12 col-sm-4 col-md-4">
		<div class="panel panel-default hidden-xs">
			<div class="panel-heading">
				<h3 class="panel-title">这是什么网站？</h3>
			</div>
			<div class="panel-body">
				这是一个专业面向开发者的技术问答社区，你可以在这里提出任何与开发相关的问题，并得到同行的解答和评价。无需注册即可登录。
			</div>
		</div><!-- about -->

		<div class="panel panel-success hidden-xs">
			<div class="panel-heading">
				<h3 class="panel-title">提示信息</h3>
			</div>
			<div class="panel-body">
				Panel content
			</div>
		</div>

		<div class="panel panel-info hidden-xs">
			<div class="panel-heading">
				<h3 class="panel-title">提示信息</h3>
			</div>
			<div class="panel-body">
				Panel content
			</div>
		</div>

		<div class="panel panel-warning hidden-xs">
			<div class="panel-heading">
				<h3 class="panel-title">提示信息</h3>
			</div>
			<div class="panel-body">
				Panel content
			</div>
		</div>

		<div class="panel panel-danger hidden-xs">
			<div class="panel-heading">
				<h3 class="panel-title">标签</h3>
			</div>
			<div class="panel-body tags">
				<span class="label label-default">Default</span>
				<span class="label label-primary">Primary</span>
				<span class="label label-success">Success</span>
				<span class="label label-info">Info</span>
				<span class="label label-warning">Warning</span>
				<span class="label label-danger">Danger</span>
				<span class="label label-warning">Warning</span>
				<span class="label label-danger">Danger</span>
			</div>
		</div><!-- tags -->
	</div>
</div>
@stop