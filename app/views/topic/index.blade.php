@extends('layout.application')

@section('content')
<div class="row">
	<div class="col-xs-12 col-sm-8 col-md-8">
		<!-- <div class="jumbotron">
			<h2>Hello, world!</h2>
			<p>This is an example to show the potential of an offcanvas layout pattern in Bootstrap. </p>
		</div> -->

		<div class="panel panel-default">
		  <div class="panel-heading">
		    <h3 class="panel-title">最新话题</h3>
		  </div>
		  <div class="panel-body">
		    <article class="post">
		    	<div class="avatar"></div>
		    	<div class="summary">
		    		<h2>nginx配置访问php出现No input file specified</h2>
		    		<div class="meta"></div>
		    	</div>
		    </article>
		  </div>
		</div>


	</div>
	<div class="col-xs-12 col-sm-4 col-md-4">
		<div class="panel panel-default hidden-xs">
		  <div class="panel-heading">
		    <h3 class="panel-title">这是什么网站？</h3>
		  </div>
		  <div class="panel-body">
		    这是一个专业面向开发者的技术问答社区，你可以在这里提出任何与开发相关的问题，并得到同行的解答和评价。无需注册即可登录。
		  </div>
		</div><!-- about -->

		<div class="panel panel-success hidden-xs">
		  <div class="panel-heading">
		    <h3 class="panel-title">提示信息</h3>
		  </div>
		  <div class="panel-body">
		    Panel content
		  </div>
		</div>

		<div class="panel panel-info hidden-xs">
		  <div class="panel-heading">
		    <h3 class="panel-title">提示信息</h3>
		  </div>
		  <div class="panel-body">
		    Panel content
		  </div>
		</div>

		<div class="panel panel-warning hidden-xs">
		  <div class="panel-heading">
		    <h3 class="panel-title">提示信息</h3>
		  </div>
		  <div class="panel-body">
		    Panel content
		  </div>
		</div>

		<div class="panel panel-danger hidden-xs">
		  <div class="panel-heading">
		    <h3 class="panel-title">标签</h3>
		  </div>
		  <div class="panel-body tags">
				<span class="label label-default">Default</span>
				<span class="label label-primary">Primary</span>
				<span class="label label-success">Success</span>
				<span class="label label-info">Info</span>
				<span class="label label-warning">Warning</span>
				<span class="label label-danger">Danger</span>
				<span class="label label-warning">Warning</span>
				<span class="label label-danger">Danger</span>
		  </div>
		</div><!-- tags -->
	</div>
</div>
@stop