@extends('layout.application')

@section('content')
<script language="javascript">
	seajs.use('app/main', function(main) {
		main.load('store');
	});
</script>

<div class="container main">
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12 store-list">
			<ul id="goods" class="list-unstyled goods-list">
				@foreach($items as $item)
				<li class="col-xs-6 col-sm-6 col-md-4 col-lg-3">
					<div class="item">
						<div class="img">
							<a href="{{ URL::to('store/item/'.$item->id) }}"><img src="{{ asset('img/test/'.$item->id.'.jpg') }}" class="img-responsive"></a>
						</div>
						<div class="info">
							<h5><a href="" data-toggle="tooltip" title="{{ $item->title }}">{{ $item->title }}</a></h5>
							<p>
								<span><i class="like glyphicon glyphicon-heart"></i> 16</span>
								<span>¥ 1,249.00</span>
							</p>
						</div>
					</div>
				</li>
				@endforeach
			</ul>
		</div>
	</div>
</div>

@stop