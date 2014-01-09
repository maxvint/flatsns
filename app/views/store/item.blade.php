@extends('layout.application')

@section('content')
<script language="javascript">
	seajs.use('app/main', function(main) {
		main.load('store');
	});
</script>

<div class="container main">
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12">


			<!-- <div class="row"> -->
				<div class="item-title">
					<h3>{{ $item->title }}</h3>
					<p class="meta">看到到这个问题很高兴。因为不久后的将来我也会做毕业设计</p>
				</div>

				<div class="col-xs-6 col-sm-6 col-md-6 item-viewport">
					<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#carousel-example-generic" data-slide-to="0" class=""></li>
							<li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
							<li data-target="#carousel-example-generic" data-slide-to="2" class="active"></li>
						</ol>
						<div class="carousel-inner">
							<div class="item active">
								<img src="{{ asset('img/test/'.$item->id.'.jpg') }}" class="img-responsive" alt="">
							</div>
							<div class="item">
								<img src="{{ asset('img/test/2.jpg') }}" class="img-responsive" alt="">
							</div>
							<div class="item">
								<img src="{{ asset('img/test/3.jpg') }}" class="img-responsive" alt="">
							</div>
						</div>
						<a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
							<span class="glyphicon glyphicon-chevron-left"></span>
						</a>
						<a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
							<span class="glyphicon glyphicon-chevron-right"></span>
						</a>
					</div>
				</div>

				<div class="col-xs-6 col-sm-6 col-md-6 item-detail">
					<h4>{{ $item->title }}</h4>
					<p>怎样更有创意的吃蛋？EggPlus给你最好玩的体验，只需打进去两个生鸡蛋，几分钟以后插入竹签，一根鸡蛋热狗就会从机器中冉冉升起……</p>
					<div class="price">价格：<h3 class="text-danger">¥ 1,249.00</h3> <span>元</span></div>
					<div class="buy">
						<a class="btn btn-danger btn-lg"><i class="glyphicon glyphicon-shopping-cart"></i> 加入购物车</a>
						<a class="pull-right btn btn-default btn-lg"><i class="glyphicon glyphicon-heart"></i> 加入收藏</a>
					</div>
				</div>

			<!-- </div> -->




		</div>



	</div>
</div>
@stop