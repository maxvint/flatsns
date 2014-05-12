@extends('layout.application')

@section('content')
<script language="javascript">
	seajs.use('app/main', function(main) {
		main.init();
		main.load('topic');
	});
</script>

<div class="container main">
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12">
			<div class="row">
				<div class="col-xs-12 col-sm-8 col-md-8 topic-view">
					<div class="avatar"><a href="{{ URL('user/'.$topic->uid) }}"><img src="{{ asset('img/avatar.jpg') }}" class="img-circle" width="60" height="60" alt=""></a></div>
					<h3>{{ $topic->title }}</h3>
					<div class="meta">
						<a href="{{ URL::to('user/'.$topic->uid) }}">{{ $topic->user->username }}</a>
						<span class="time">发表于 {{ $topic->create }}</span>
						<div class="pull-right info">
							<span class="glyphicon glyphicon-eye-open"></span>{{ $topic->views }}
							<span class="glyphicon glyphicon-comment"></span>{{ $topic->replies }}
						</div>
					</div>
					<!-- <div class="action" id="topic-view-action">
						<a href="javascript:;" data-toggle="tooltip" title="好文章，顶一个"><i class="glyphicon glyphicon-thumbs-up"></i><span class="num">25</span></a>
						<a href="javascript:;" data-toggle="tooltip" title="无节操，毁三观"><i class="glyphicon glyphicon-thumbs-down"></i></a>
						<a href="javascript:;" data-toggle="tooltip" title="收藏"><i class="glyphicon glyphicon-star-empty"></i></a>
					</div> -->
					<article>
						{{ $topic->content }}
					</article>


					@include('layout.share')

					<div class="replies">
						<h4><span class="count">{{ $topic->replies }}</span>条回复</h4>
						@foreach($replies as $reply)
						<div class="list">
							<div class="avatar"><a href="{{ URL('user/'.$reply->user->id) }}"><img src="{{ asset('img/avatar.jpg') }}" class="img-circle" width="40" height="40" alt=""></a></div>
							<div class="userinfo">
								<a href="{{ URL('user/'.$reply->user->id) }}">{{ $reply->user->username }}</a>
								<span class="time" title="{{ $reply->created_at }}">{{ $reply->create }}</span>
							</div>
							<div class="reply">{{ $reply->content }}</div>
							<div class="action">
								<a href="">回复</a>
								<a href=""></a>
							</div>
						</div>
						@endforeach
					</div>
					<div class="reply-form">
						<div class="avatar"><a href=""><img src="{{ asset('img/avatar.jpg') }}" class="img-circle" width="40" height="40" alt=""></a></div>
						<div class="userinfo">
								<a href="{{ URL('user/'.$user->id) }}">{{ $user->username }}</a>
							</div>
						<div class="field">
							{{ Form::open(array('url' => '', 'method' => 'post')) }}
								<div class="form-group">
									<textarea name="content" id="reply_content" class="form-control" rows="4" placeholder="你怎么看？"></textarea>
								</div>
								<a href="javascript:;" id="add_reply" class="btn btn-primary" event-args="pid={{ $topic->id }}&uid=1">提交回复</a>
								<a href="" class="btn btn-default">取消</a>
								<span class="pull-right"><a href="{{ URL::to('topic') }}"><i class="glyphicon glyphicon-arrow-left"></i> 返回首页</a></span>
							{{ Form::close() }}
						</div>
					</div>
				</div>

				<div class="col-xs-12 col-sm-4 col-md-4">
					<div class="panel panel-default hidden-xs">
						<div class="panel-heading">
							<h3 class="panel-title">相关标签</h3>
						</div>
						<div class="panel-body">
							<div class="action">
								<a href="{{ URL::to('topic/edit/'.$topic->id) }}" class="btn btn-success">编辑</a>
								<a href="{{ URL::to('topic/delete/'.$topic->id) }}" class="btn btn-danger">删除</a>
							</div>
							<!-- <a class="label label-primary">Primary</a> -->
						</div>
					</div>

					<div class="panel panel-default hidden-xs">
						<div class="panel-heading">
							<h3 class="panel-title">分享</h3>
						</div>
						<div class="panel-body">
							<input title="本页网址" type="text" class="" readonly="" value="{{ URL::to('topic/show/'.$topic->id) }}">
						</div>
					</div>

					<div class="panel panel-default hidden-xs">
						<div class="panel-heading">
							<h3 class="panel-title">最新话题</h3>
						</div>
						<div class="panel-body">
							<ul class="link-list">
								@foreach($relates as $relate)
								<li><a href="{{ URL::to('topic/show/'.$relate->id) }}">{{ $relate->title }}</a></li>
								@endforeach
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@stop