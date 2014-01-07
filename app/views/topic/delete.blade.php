@extends('layout.application')

@section('content')

<div class="container main">
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12">
			<ol class="breadcrumb">
				<li><a href="">首页</a></li>
				<li><a href="{{ URL::to('topic') }}">话题</a></li>
				<li class="active">删除话题</li>
			</ol>
			<div class="col-xs-12 col-sm-8 col-md-8 well">
				<form action="" class="" method="post" role="form">
					<input type="hidden" name="id" value="{{ $topic->id }}" />
					<button type="submit" id="topic_delete" class="btn btn-danger">确认删除</button>
					<a href="" class="btn btn-default">取消</a>
				</form>
			</div>

			<div class="col-xs-12 col-sm-4 col-md-4">


			</div>
		</div>
	</div>
</div>
@stop