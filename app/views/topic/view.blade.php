@extends('layout.application')

@section('content')
<script language="javascript">
	seajs.use('app/main', function(main) {
		main.load('topic');
	});
</script>
<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12">
		<!-- <ol class="breadcrumb hidden-xs">
			<li><a href="{{ URL::to('/') }}">首页</a></li>
			<li><a href="{{ URL::to('topic') }}">话题</a></li>
			<li class="active">{{ $topic->title }}</li>
		</ol> -->
		<div class="row">
			<div class="col-xs-12 col-sm-8 col-md-8 topic-view">
				<div class="avatar"><a href="{{ URL('user/'.$topic->uid) }}"><img src="{{ asset('img/avatar.jpg') }}" class="img-circle" width="60" height="60" alt=""></a></div>
				<h3>{{ $topic->title }}</h3>
				<div class="meta">
					<a href="{{ URL::to('user/'.$topic->uid) }}">{{ $topic->user->username }}</a>
					<div class="pull-right info">
						<span>{{ $topic->create }}</span>
						<span class="glyphicon glyphicon-eye-open"></span>{{ $topic->views }}
						<span class="glyphicon glyphicon-comment"></span>{{ $topic->replies }}
					</div>
				</div>
				<article>
					{{ $topic->content }}
				</article>
				<div class="action">
					<a href="{{ URL::to('topic/edit/'.$topic->id) }}" class="btn btn-success">编辑</a>
					<a href="{{ URL::to('topic/delete/'.$topic->id) }}" class="btn btn-danger">删除</a>
				</div>
				<div class="share"></div>

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
				<div class="reply">
					<div class="avatar"><a href=""><img src="{{ asset('img/avatar.jpg') }}" class="img-circle" width="40" height="40" alt=""></a></div>
					<div class="userinfo">
							<a href="{{ URL('user/'.$user->id) }}">{{ $user->username }}</a>
						</div>
					<div class="field">
						{{ Form::open(array('url' => '', 'method' => 'post')) }}
							<div class="form-group">
								<textarea name="content" id="reply_content" class="form-control" rows="4" placeholder="你怎么看？"></textarea>
							</div>
							<a href="javascript:;" id="add_reply" class="btn btn-primary" event-args="pid={{ $topic->id }}&uid=1">提交发布</a>
							<a href="" class="btn btn-default">取消</a>
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
						<a class="label label-primary">Primary</a>
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
						<h3 class="panel-title">相关话题</h3>
					</div>
					<div class="panel-body">
						<ul class="link-list">
							<li><a href="http://segmentfault.com/q/1010000000249303">Python 不能自动创建不存在的文件</a></li>
							<li><a href="http://segmentfault.com/q/1010000000121443">python2.7 如何使用pyAudio模块进行录音并保存为文件？</a></li>
							<li><a href="http://segmentfault.com/q/1010000000184254">python调用typecho的xmlrpc 上传文件 返回数据出错</a></li>
							<li><a href="http://segmentfault.com/q/1010000000349845">python beautifulsoup截取本地htm文件标签失败</a></li>
							<li><a href="http://segmentfault.com/q/1010000000363276">如何设置只镜像存储图像文件，而不镜像存储html文件文件</a></li>
							<li><a href="http://segmentfault.com/q/1010000000117196">修改wordpress中wp-includes文件夹下的functions.php，WP就一直500报错</a></li>
							<li><a href="http://segmentfault.com/q/1010000000143871">vim 文件刷新</a></li>
							<li><a href="http://segmentfault.com/q/1010000000196850">nginx 没有生成缓存文件</a></li>
							<li><a href="http://segmentfault.com/q/1010000000356056">HTML5中使用Font Awesome 找不到字体文件</a></li>
							<li><a href="http://segmentfault.com/q/1010000000172781">Nginx作为开发环境服务器，无法清除静态文件缓存</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>

			
	</div>
</div>
@stop