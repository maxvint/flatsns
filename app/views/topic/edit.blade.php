@extends('layout.application')

@section('content')
<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12">
		<ol class="breadcrumb">
			<li><a href="">首页</a></li>
			<li><a href="{{ URL::to('topic') }}">话题</a></li>
			<li class="active">编辑话题</li>
		</ol>
		<div class="col-xs-12 col-sm-8 col-md-8 well">
			<form action="" class="" method="post" role="form">
				<legend>编辑话题</legend>
				<div class="form-group">
					<label for="title" class="control-label">标题：</label>
					<input type="text" name="title" class="form-control" value="{{ $topic->title }}" placeholder="请用一句话说明你的标题" />
				</div>
				<div class="form-group">
					<label for="content" class="control-label">内容：</label>
					<textarea name="content" class="form-control" rows="20" placeholder="请输入话题内容">{{ $topic->content }}</textarea>
				</div>
				<button type="submit" id="topic_post" class="btn btn-primary">提交发布</button>
				<a href="" class="btn btn-default">取消</a>
			</form>
		</div>
		
		<div class="col-xs-12 col-sm-4 col-md-4">
			
			
		</div>
	</div>
		
</div>
@stop