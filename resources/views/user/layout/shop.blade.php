<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home</title>	
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/images/favicon.ico')}}">
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400italic,700,700italic,900,900italic&amp;subset=latin,latin-ext" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open%20Sans:300,400,400italic,600,600italic,700,700italic&amp;subset=latin,latin-ext" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="{{asset('public/assets/css/animate.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('public/assets/css/font-awesome.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('public/assets/css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('public/assets/css/owl.carousel.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('public/assets/css/chosen.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('public/assets/css/style.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('public/assets/css/color-01.css')}}">
</head>
<body class="home-page home-01 ">

	<!-- mobile menu -->
    <div class="mercado-clone-wrap">
        <div class="mercado-panels-actions-wrap">
            <a class="mercado-close-btn mercado-close-panels" href="#">x</a>
        </div>
        <div class="mercado-panels"></div>
    </div>
	@include('user.layout.header')
	<!--header-->
	<main id="main" class="main-site left-sidebar">

		<div class="container">

			<div class="wrap-breadcrumb">
				<ul>
					<li class="item-link"><a href="#" class="link">home</a></li>
					<li class="item-link"><span>Digital & Electronics</span></li>
				</ul>
			</div>
			<div class="row">

				@yield('content')

				<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 sitebar">
					<div class="widget mercado-widget categories-widget">
						<h2 class="widget-title">Hãng sản phẩm</h2>
						<div class="widget-content">
							<ul class="list-category">
							@foreach($all_brand as $key => $brand)
								<li class="category-item">
									<a href="{{url('/shop/brand/'.$brand->brand_id)}}" class="cate-link">{{$brand->brand_name}}</a>
								</li>
							@endforeach
							</ul>
						</div>
					</div><!-- Categories widget-->

					<div class="widget mercado-widget categories-widget">
						<h2 class="widget-title">Dòng sản phẩm</h2>
						<div class="widget-content">
							<ul class="list-category">
							@foreach($all_class as $key => $class)
								<li class="category-item">
									<a href="{{url('/shop/class/'.$class->class_id)}}" class="cate-link">{{$class->class_name}}</a>
								</li>
							@endforeach
							</ul>
						</div>
					</div><!-- Categories widget-->

                    <div class="widget mercado-widget categories-widget">
						<h2 class="widget-title">CPU</h2>
						<div class="widget-content">
							<ul class="list-category">
							@foreach($all_cpu as $key => $cpu)
								<li class="category-item">
									<a href="{{url('/shop/cpu/'.$cpu->cpu_id)}}" class="cate-link">{{$cpu->cpu_name}}</a>
								</li>
							@endforeach
							</ul>
						</div>
					</div><!-- Categories widget-->

                    <div class="widget mercado-widget categories-widget">
						<h2 class="widget-title">CPU</h2>
						<div class="widget-content">
							<ul class="list-category">
							@foreach($all_harddisk as $key => $harddisk)
								<li class="category-item">
									<a href="{{url('/shop/harddisk/'.$harddisk->harddisk_id)}}" class="cate-link">{{$harddisk->capacity_harddisk}}</a>
								</li>
							@endforeach
							</ul>
						</div>
					</div><!-- Categories widget-->

                    <div class="widget mercado-widget categories-widget">
						<h2 class="widget-title">CPU</h2>
						<div class="widget-content">
							<ul class="list-category">
							@foreach($all_ram as $key => $ram)
								<li class="category-item">
									<a href="{{url('/shop/ram/'.$ram->ram_id)}}" class="cate-link">{{$ram->ram_detail}}</a>
								</li>
							@endforeach
							</ul>
						</div>
					</div><!-- Categories widget-->

                    <div class="widget mercado-widget categories-widget">
						<h2 class="widget-title">CPU</h2>
						<div class="widget-content">
							<ul class="list-category">
							@foreach($all_card as $key => $card)
								<li class="category-item">
									<a href="{{url('/shop/card/'.$card->card_id)}}" class="cate-link">{{$card->card_detail}}</a>
								</li>
							@endforeach
							</ul>
						</div>
					</div><!-- Categories widget-->

                    <div class="widget mercado-widget categories-widget">
						<h2 class="widget-title">CPU</h2>
						<div class="widget-content">
							<ul class="list-category">
							@foreach($all_screen as $key => $screen)
								<li class="category-item">
									<a href="{{url('/shop/screen/'.$screen->screen_id)}}" class="cate-link">{{$screen->screen_detail}}</a>
								</li>
							@endforeach
							</ul>
						</div>
					</div><!-- Categories widget-->

				</div><!--end sitebar-->

			</div><!--end row-->

		</div><!--end container-->

	</main>
	@include('user.layout.footer')
	
	<script src="{{asset('public/assets/js/jquery-1.12.4.minb8ff.js?ver=1.12.4')}}"></script>
	<script src="{{asset('public/assets/js/jquery-ui-1.12.4.minb8ff.js?ver=1.12.4')}}"></script>
	<script src="{{asset('public/assets/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('public/assets/js/jquery.flexslider.js')}}"></script>
	<script src="{{asset('public/assets/js/chosen.jquery.min.js')}}"></script>
	<script src="{{asset('public/assets/js/owl.carousel.min.js')}}"></script>
	<script src="{{asset('public/assets/js/jquery.countdown.min.js')}}"></script>
	<script src="{{asset('public/assets/js/jquery.sticky.js')}}"></script>
	<script src="{{asset('public/assets/js/functions.js')}}"></script>
</body>
</html>