@extends('layout.application')
@section('content')
<script language="javascript">
	seajs.use('app/main', function(main) {
		main.load('profile');
	});
</script>
<div class="container main">
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12">
			<div class="row">
				<div class="col-xs-3">
					<ul class="nav nav-pills nav-stacked">
						<li class="active"><a href="{{ URL::to('user/setting') }}">个人资料</a></li>
						<li><a href="{{ URL::to('user/avatar') }}">头像</a></li>
						<li><a href="#">消息</a></li>
					</ul>
				</div>
				<div class="col-xs-9">
					<form action="" class="form-horizontal" method="post" role="form">
						<legend>个人资料</legend>
						<div class="form-group">
							<label for="email" class="col-xs-2 col-sm-2 col-md-2 control-label">邮箱：</label>
							<div class="col-xs-4 col-sm-4 col-md-4">
								<input type="text" name="email" class="form-control" id="email" value="" placeholder="您的邮箱" autocomplete="off">
							</div>
						</div>
						<div class="form-group">
							<div class="col-xs-offset-2 col-md-offset-2 col-xs-4 col-md-4">
								<button type="submit" class="btn btn-lg btn-primary">提交保存</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@stop