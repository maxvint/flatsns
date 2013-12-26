@extends('layout.application')

@section('content')
<script language="javascript">
	seajs.use('app/main', function(main) {
		main.load('topic');
	});
</script>
<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12">
		<ol class="breadcrumb hidden-xs">
			<li><a href="{{ URL::to('/') }}">首页</a></li>
			<li><a href="{{ URL::to('topic') }}">话题</a></li>
			<li class="active">{{ $topic->title }}</li>
		</ol>
		<div class="row">
			<div class="col-xs-12 col-sm-8 col-md-8 topic-view">
				<h3>{{ $topic->title }}</h3>
				<article>
					{{ $topic->content }}
				</article>
				<div class="action">
					<a href="{{ URL::to('topic/edit/'.$topic->id) }}" class="btn btn-success">编辑</a>
					<a href="{{ URL::to('topic/delete/'.$topic->id) }}" class="btn btn-danger">删除</a>
				</div>
				<div class="share"></div>

				<ul class="replies">
					@foreach($replies as $reply)
					<li>{{ $reply->content }}</li>
					@endforeach
				</ul>
				<div class="reply">
					<form action="{{ URL::to('reply/create') }}" class="" method="post" role="form">
						<legend>发表回复</legend>
						<div class="form-group">
							<textarea name="content" id="reply_content" class="form-control" rows="5" placeholder="请输入回复内容"></textarea>
						</div>
						<a href="javascript:;" id="add_reply" class="btn btn-primary" event-args="pid={{ $topic->id }}">提交发布</a>
						<a href="" class="btn btn-default">取消</a>
					</form>
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