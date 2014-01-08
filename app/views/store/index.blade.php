@extends('layout.application')

@section('content')
<<<<<<< HEAD
<script language="javascript">
	seajs.use('app/main', function(main) {
		main.load('store');
	});
</script>
=======
>>>>>>> a8102a6a0aaba109521e4721c02b44c435f0862e
<div class="container main">
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12 store-list">
			<ul id="goods" class="list-unstyled goods-list">
<<<<<<< HEAD
				@foreach($items as $item)
				<li class="col-xs-6 col-sm-6 col-md-4 col-lg-3">
					<div class="item">
						<div class="img">
							<a href="{{ URL::to('store/item/'.$item->id) }}"><img src="{{ asset('img/test/'.$item->id.'.jpg') }}" class="img-responsive"></a>
						</div>
						<div class="info">
							<h5><a href="" data-toggle="tooltip" title="{{ $item->title }}">{{ $item->title }}</a></h5>
=======
				@for($i=1; $i<=12; $i++)
				<li class="col-xs-6 col-sm-6 col-md-4 col-lg-3">
					<div class="item">
						<div class="img">
							<a href="{{ URL::to('goods/show/') }}"><img src="{{ asset('img/test/'.$i.'.jpg') }}" class="img-responsive"></a>
						</div>
						<div class="info">
							<h5><a href="">Pebble Steel - 接近完美的智能手表</a></h5>
>>>>>>> a8102a6a0aaba109521e4721c02b44c435f0862e
							<p>
								<span><i class="like glyphicon glyphicon-heart"></i> 16</span>
								<span>¥ 1,249.00</span>
							</p>
						</div>
					</div>
				</li>
<<<<<<< HEAD
				@endforeach
=======
				@endfor
>>>>>>> a8102a6a0aaba109521e4721c02b44c435f0862e
			</ul>
		</div>
	</div>
</div>

@stop