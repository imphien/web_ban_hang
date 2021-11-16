@extends('user.layout.shop')
@section('content')
<div class="col-lg-9 col-md-8 col-sm-8 col-xs-12 main-content-area">

	<div class="banner-shop">
		<a href="#" class="banner-link">
			<figure><img src="assets/images/shop-banner.jpg" alt=""></figure>
		</a>
	</div>


	<div class="row">
		<ul class="product-list grid-products equal-container">
			@foreach($all_product as $value => $pro)
			<li class="col-lg-4 col-md-6 col-sm-6 col-xs-6 ">
				<div class="product product-style-3 equal-elem ">
					<div class="product-thumnail">
						<a href="{{url('/product_detail/'.$pro->product_id)}}" title="{{$pro->product_detail}}">
						@foreach($pro->image_product as $value )
							<figure><img src="{{ URL::to('/') }}/public/upload/product/{{$value->url}}"></figure>
							@break
						@endforeach
						</a>
					</div>
					<div class="product-info">
						<a href="#" class="product-name"><span>{{$pro->product_name}}</span></a>
						<div class="wrap-price"><span class="product-price">{{number_format($pro->price)}}.VND</span></div>
						<a href="#" class="btn add-to-cart">Add To Cart</a>
					</div>
				</div>
			</li>
			@endforeach
		</ul>
	</div>

	<div class="wrap-pagination-info">
		<ul class="page-numbers">
			<li><span class="page-number-item current" >1</span></li>
			<li><a class="page-number-item" href="#" >2</a></li>
			<li><a class="page-number-item" href="#" >3</a></li>
			<li><a class="page-number-item next-link" href="#" >Next</a></li>
		</ul>
		<p class="result-count">Showing 1-8 of 12 result</p>
	</div>
</div>

@endsection