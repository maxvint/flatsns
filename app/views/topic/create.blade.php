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
				<div class="col-xs-12 col-sm-8 col-md-8">
					<div class="well">
						<form action="" class="create" method="post" role="form">
							<legend>发新话题</legend>
							<div class="form-group">
								<label for="title" class="control-label">标题：</label>
								<input type="text" name="title" class="form-control" placeholder="请用一句话说明你的标题" />
							</div>
							<div class="form-group">
								<label for="content" class="control-label">内容：</label>
								<!-- <textarea name="content" class="form-control" rows="20" placeholder="请输入话题内容"></textarea> -->
								@include('layout.editor', array('data' => ''))
							</div>
							<button type="submit" id="topic_post" class="btn btn-primary">提交发布</button>
							<a href="" class="btn btn-default">取消</a>
						</form>
					</div>
				</div>
				<div class="col-xs-12 col-sm-4 col-md-4">
					<div class="panel panel-default hidden-xs">
						<div class="panel-heading">
							<h3 class="panel-title">使用帮助</h3>
						</div>
						<div class="panel-body">
							<a class="label label-primary">Primary</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@stop