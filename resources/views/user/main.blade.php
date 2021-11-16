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

				<!--end sitebar-->

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