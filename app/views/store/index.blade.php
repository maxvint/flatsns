@extends('layout.application')

@section('content')
<div class="container main">
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12 store-list">
			<ul id="goods" class="list-unstyled goods-list">
				@for($i=1; $i<=12; $i++)
				<li class="col-xs-6 col-sm-6 col-md-4 col-lg-3">
					<div class="item">
						<div class="img">
							<a href="{{ URL::to('goods/show/') }}"><img src="{{ asset('img/test/'.$i.'.jpg') }}" class="img-responsive"></a>
						</div>
						<div class="info">
							<h5><a href="">Pebble Steel - 接近完美的智能手表</a></h5>
							<p>
								<span><i class="like glyphicon glyphicon-heart"></i> 16</span>
								<span>¥ 1,249.00</span>
							</p>
						</div>
					</div>
				</li>
				@endfor
			</ul>
		</div>
	</div>
</div>

@stop