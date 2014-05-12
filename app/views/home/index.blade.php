@extends('layout.application')

@section('content')
<script language="javascript">
	seajs.use('app/main', function(main) {
		main.load('user');
	});
</script>

<div class="container-inline top">
	<div class="bar"></div>
	<div class="container">
		<div class="user-info">
			<div class="avatar">
				<a href=""><img src="{{ asset('img/avatar-1.jpg') }}" class="img-circle" width="160" height="160"></a>
			</div>
			<div class="name"><h2>张慧</h2></div>
			<div class="profile">
				<span class="pull-right"></span>
				<p>签名: 误打误撞进了IT圈</p>
				<a href="" class="btn btn-primary"><i class="glyphicon glyphicon-plus"></i> 加关注</a>
			</div>
		</div>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12">
			<div class="row">
				<div class="col-xs-12 col-sm-8 col-md-8 feed-inner">
					<h3>最新动态</h3>
					<div class="item">
						<div class="avatar">
							<img src="{{ asset('img/avatar.jpg') }}" class="img-circle" width="60" height="60" alt="">
						</div>
						<div class="body">
							<a href="">yuwenhui1986</a>
							<div class="meta">
								<span>(陕西 西安)</span>
								<span>2分钟前</span>
							</div>
							<p>谢邀。我知识有限，对于历史问题无法给出准确答案，但这是一个非常好的问题，所以也希望看到更科学更准确的答案。 可以肯定的是，城市的规划在这种格局的形成上有着较大的影响。虽然银座和秋叶原都是有一定历史的区域，一些自古存在的住宅并不会被集中的商业</p>
						</div>
					</div>
					<div class="item">
						<div class="avatar">
							<img src="{{ asset('img/avatar.jpg') }}" class="img-circle" width="60" height="60" alt="">
						</div>
						<div class="body">
							<a href="">yuwenhui1986</a>
							<div class="meta">
								<span>(陕西 西安)</span>
								<span>2分钟前</span>
							</div>
							<h5><a href="">怎样才能加入到微信团队工作？</a></h5>
							<p>曾拿到过微信产品部两个版本的口头offer，最后没有去，原因大概是对微信的下限预估不足。如果题主希望加入微信，尤其是产品的话，最好先刷低下限，降低期望，以防因为被恶心到惊呆而去不成。</p>
							<ul class="list-unstyled reply-list">
								<li>
									<a href="" class="avatar"><img src="{{ asset('img/avatar.jpg') }}" class="img-circle" width="30" height="30" alt=""></a>
									<p class="info"><a href="">张三丰</a>: 经硅谷腾讯前员工朋友介绍，腾讯在他意欲离职出国时也曾口头承诺工资翻倍。但这哥们比我聪明，知道腾讯懂得如何先让你拒了国外offer再改口压低，故还是毅然出国了。</p>
								</li>
								<li>
									<a href="" class="avatar"><img src="{{ asset('img/avatar.jpg') }}" class="img-circle" width="30" height="30" alt=""></a>
									<p class="info"><a href="">张三丰</a>: HR再次来电，大意是之前承诺的都不算数，现在只能给你一极普通之offer，这是张小龙的意思。我提出争议，要求与张小龙直接通话了解缘由。HR说好，去帮我约</p>
								</li>
								<li>
									<a href="" class="avatar"><img src="{{ asset('img/avatar.jpg') }}" class="img-circle" width="30" height="30" alt=""></a>
									<p class="info"><a href="">张三丰</a>: 经硅谷腾讯前员工朋友介绍，腾讯在他意欲离职出国时也曾口头承诺工资翻倍。但这哥们比我聪明，知道腾讯懂得如何先让你拒了国外offer再改口压低，故还是毅然出国了。</p>
								</li>
								<li>
									<a href="" class="avatar"><img src="{{ asset('img/avatar.jpg') }}" class="img-circle" width="30" height="30" alt=""></a>
									<div class="reply-form">
										<form action="" class="" method="post" role="form">
											<div class="form-group">
												<input type="text" name="email" class="form-control" value="" placeholder="你怎么看？" autocomplete="off">
											</div>
										</form>
									</div>
								</li>
							</ul>
						</div>
					</div>

					<div class="item">
						<div class="avatar">
							<img src="{{ asset('img/avatar.jpg') }}" class="img-circle" width="60" height="60" alt="">
						</div>
						<div class="body">
							<a href="">yuwenhui1986</a>
							<div class="meta">
								<span>(陕西 西安)</span>
								<span>2分钟前</span>
							</div>
							<p>谢邀。我知识有限，对于历史问题无法给出准确答案，但这是一个非常好的问题，所以也希望看到更科学更准确的答案。 可以肯定的是，城市的规划在这种格局的形成上有着较大的影响。虽然银座和秋叶原都是有一定历史的区域，一些自古存在的住宅并不会被集中的商业</p>
							<ul class="list-unstyled reply-list">
								<li>
									<a href="" class="avatar"><img src="{{ asset('img/avatar.jpg') }}" class="img-circle" width="30" height="30" alt=""></a>
									<div class="reply-form">
										<form action="" class="" method="post" role="form">
											<div class="form-group">
												<input type="text" name="email" class="form-control" value="" placeholder="你怎么看？" autocomplete="off">
											</div>
										</form>
									</div>
								</li>
							</ul>
						</div>
					</div>

					<div class="item">
						<div class="avatar">
							<img src="{{ asset('img/avatar.jpg') }}" class="img-circle" width="60" height="60" alt="">
						</div>
						<div class="body">
							<a href="">yuwenhui1986</a>
							<div class="meta">
								<span>(陕西 西安)</span>
								<span>2分钟前</span>
							</div>
							<p>谢邀。我知识有限，对于历史问题无法给出准确答案，但这是一个非常好的问题，所以也希望看到更科学更准确的答案。 可以肯定的是，城市的规划在这种格局的形成上有着较大的影响。虽然银座和秋叶原都是有一定历史的区域，一些自古存在的住宅并不会被集中的商业</p>
						</div>
					</div>

					<div class="item">
						<div class="avatar">
							<img src="{{ asset('img/avatar.jpg') }}" class="img-circle" width="60" height="60" alt="">
						</div>
						<div class="body">
							<a href="">yuwenhui1986</a>
							<div class="meta">
								<span>(陕西 西安)</span>
								<span>2分钟前</span>
							</div>
							<p>谢邀。我知识有限，对于历史问题无法给出准确答案，但这是一个非常好的问题，所以也希望看到更科学更准确的答案。 可以肯定的是，城市的规划在这种格局的形成上有着较大的影响。虽然银座和秋叶原都是有一定历史的区域，一些自古存在的住宅并不会被集中的商业</p>
						</div>
					</div>
				</div>

				<div class="col-xs-12 col-sm-4 col-md-4">
					<div class="panel panel-default hidden-xs">
						<div class="panel-heading">
							<h3 class="panel-title">热门话题</h3>
						</div>
						<div class="panel-body">

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@stop