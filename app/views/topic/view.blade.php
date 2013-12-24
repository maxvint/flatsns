@extends('layout.application')

@section('content')
<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12">
		<ol class="breadcrumb">
			<li><a href="{{ URL::to('/') }}">首页</a></li>
			<li><a href="{{ URL::to('topic/index') }}">话题</a></li>
			<li class="active">{{ $topic->title }}</li>
		</ol>
		<div class="col-xs-12 col-sm-8 col-md-8">
			<h4>{{ $topic->title }}</h4>
			<article>
				{{ $topic->content }}
			</article>

			
		</div>
	</div>
</div>
@stop