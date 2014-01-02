@extends('layout.application')
@section('content')
<script language="javascript">
	seajs.use('app/main', function(main) {
		main.load('avatar');
	});
</script>
<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12">
		<div class="row">
			<div class="col-xs-3 col-sm-3 col-md-3">
				<ul class="nav nav-pills nav-stacked">
					<li><a href="{{ URL::to('user/setting') }}">个人资料</a></li>
					<li class="active"><a href="{{ URL::to('user/avatar') }}">头像</a></li>
					<li><a href="{{ URL::to('user/message') }}">消息</a></li>
				</ul>
			</div>
			<div class="col-xs-9 col-sm-9 col-md-9">
				<form action="" class="form-horizontal" method="post" role="form">
					<legend>头像</legend>
					<div class="form-group">
						<div class="col-xs-2 col-sm-2 col-md-2">
							<div class="avatar-crop">
								<div class="upload-tip">
										<p>选择一张图片上传为头像</p>
										<p>支持jpg、png、gif格式，且文件小于10M</p>
										<p>图片尺寸不小于300x300</p>
								</div>

							</div>
							<div class="upload-btn">
								<input type="file" name="avatar" id="fileupload" class="btn btn-success">
							</div>

							<div class="avatar-upload">

							</div>



						</div>
						<div class="col-xs-2 col-sm-2 col-md-2 avatar-view">
						</div>
					</div>
					<div class="form-group">
						<div class="col-xs-4 col-md-4">
							<button type="submit" class="btn btn-lg btn-primary">提交保存</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
@stop