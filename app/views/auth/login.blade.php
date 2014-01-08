@extends('layout.application')
@section('content')
<script language="javascript">
	seajs.use('app/main', function(main) {
		main.load('passport');
	});
</script>

<div class="container main">
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12">
			<div class="well">
				<form action="" class="form-horizontal" method="post" role="form">
					<legend>用户登录</legend>
					<div class="form-group">
						<label for="email" class="col-xs-2 col-sm-2 col-md-2 control-label">邮箱：</label>
						<div class="col-xs-4 col-sm-4 col-md-4">
							<input type="text" name="email" class="form-control" id="email" value="" placeholder="您的邮箱" autocomplete="off">
						</div>
					</div>
					<div class="form-group">
						<label for="password" class="col-xs-2 col-sm-2 col-md-2 control-label">密码：</label>
						<div class="col-xs-4 col-sm-4 col-md-4">
							<input type="password" name="password" class="form-control" id="password" placeholder="密码">
						</div>
					</div>
					<div class="form-group">
						<div class="col-xs-offset-2 col-md-offset-2 col-xs-4 col-md-4">
							<div class="checkbox">
								<label><input type="checkbox" name="remember" value="1"> 记住我，下次自动登录</label>
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="col-xs-offset-2 col-md-offset-2 col-xs-4 col-md-4">
							<button type="submit" class="btn btn-lg btn-primary">登录</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
@stop