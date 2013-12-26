@extends('layout.application')

@section('content')
<script language="javascript">
	seajs.use('app/main', function(main) {
		main.load('register');
	});
</script>
<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12">
		<div class="well">
			<form action="" class="form-horizontal" method="post" role="form">
				<legend>用户注册</legend>
				<div class="form-group">
					<label for="email" class="col-xs-2 col-sm-2 col-md-2 control-label">邮箱：</label>
					<div class="col-xs-4 col-sm-4 col-md-4">
						<input type="email" name="email" class="form-control" id="email" value="" placeholder="您的邮箱" autocomplete="off">
					</div>
				</div>
				<div class="form-group">
					<label for="password" class="col-xs-2 col-sm-2 col-md-2 control-label">密码：</label>
					<div class="col-xs-4 col-sm-4 col-md-4">
						<input type="password" name="password" class="form-control" id="password" placeholder="密码">
					</div>
				</div>
				<div class="form-group">
					<label for="repassword" class="col-xs-2 col-sm-2 col-md-2 control-label">确认密码：</label>
					<div class="col-xs-4 col-sm-4 col-md-4">
						<input type="password" name="repassword" class="form-control" id="repassword" placeholder="请再次输入您的密码">
					</div>
				</div>
				<div class="form-group">
					<label for="username" class="col-xs-2 col-sm-2 col-md-2 control-label">用户名：</label>
					<div class="col-xs-4 col-sm-4 col-md-4">
						<input type="username" name="username" class="form-control" id="username" value="" placeholder="取个名字吧" autocomplete="off">
					</div>
				</div>
				<div class="form-group">
					<div class="col-xs-offset-2 col-md-offset-2 col-xs-4 col-md-4">
						<button type="submit" class="btn btn-lg btn-primary">注册</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
@stop