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

			<h3>{{ $item->title }}</h3>


			<div class="row">
				<div class="col-xs-12 col-sm-8 col-md-8 topic-view">
					

					@include('layout.share')

				</div>

				<div class="col-xs-12 col-sm-4 col-md-4">
					<div class="panel panel-default hidden-xs">
						<div class="panel-heading">
							<h3 class="panel-title">相关标签</h3>
						</div>
						
						</div>
					</div>

	
				</div>
			</div>
		</div>
	</div>
</div>
@stop