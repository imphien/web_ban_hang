
@extends('user.main')
@section('content')
			<!--MAIN SLIDE-->
			<div class="wrap-main-slide">
				<div class="slide-carousel owl-carousel style-nav-1" data-items="1" data-loop="1" data-nav="true" data-dots="false">
					<div class="item-slide">
						<img src="{{asset('public/assets/images/main-slider-1-1.jpg')}}" alt="" class="img-slide">
						<div class="slide-info slide-1">
							<h2 class="f-title">Kid Smart <b>Watches</b></h2>
							<span class="subtitle">Compra todos tus productos Smart por internet.</span>
							<p class="sale-info">Only price: <span class="price">$59.99</span></p>
							<a href="#" class="btn-link">Shop Now</a>
						</div>
					</div>
				</div>
			</div>
			<!--BANNER-->
			<div class="wrap-banner style-twin-default">
				<div class="banner-item">
					<a href="#" class="link-banner banner-effect-1">
						<figure><img src="{{asset('public/assets/images/home-1-banner-1.jpg')}}" alt="" width="580" height="190"></figure>
					</a>
				</div>
				<div class="banner-item">
					<a href="#" class="link-banner banner-effect-1">
						<figure><img src="{{asset('public/assets/images/home-1-banner-2.jpg')}}" alt="" width="580" height="190"></figure>
					</a>
				</div>
			</div>

			<!--On Sale-->
			<div class="wrap-show-advance-info-box style-1 has-countdown">
				<h3 class="title-box">Đang giảm giá</h3>
				<div class="wrap-countdown mercado-countdown" ></div>
				<div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container " data-items="5" data-loop="false" data-nav="true" data-dots="false" data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}'>

					<div class="product product-style-2 equal-elem ">
						<div class="product-thumnail">
							<a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
								<figure><img src="{{asset('public/assets/images/products/tools_equipment_7.jpg')}}" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
							</a>
							<div class="group-flash">
								<span class="flash-item sale-label">sale</span>
							</div>
							<div class="wrap-btn">
								<a href="#" class="function-link">quick view</a>
							</div>
						</div>
						<div class="product-info">
							<a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
							<div class="wrap-price"><span class="product-price">$250.00</span></div>
						</div>
					</div>


				</div>
			</div>

			<!--Latest Products-->
			<div class="wrap-show-advance-info-box style-1">
				<h3 class="title-box">Sản phẩm mới nhất</h3>
				<div class="wrap-top-banner">
					<a href="#" class="link-banner banner-effect-2">
						<figure><img src="{{asset('public/assets/images/digital-electronic-banner.jpg')}}" width="1170" height="240" alt=""></figure>
					</a>
				</div>
				<div class="wrap-products">
					<div class="wrap-product-tab tab-style-1">						
						<div class="tab-contents">
							<div class="tab-content-item active" id="digital_1a">
								<div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container" data-items="5" data-loop="false" data-nav="true" data-dots="false" data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}' >

									<div class="product product-style-2 equal-elem ">
										<div class="product-thumnail">
											<a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
												<figure><img src="{{asset('public/assets/images/products/digital_04.jpg')}}" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
											</a>
											<div class="group-flash">
												<span class="flash-item new-label">new</span>
											</div>
											<div class="wrap-btn">
												<a href="#" class="function-link">quick view</a>
											</div>
										</div>
										<div class="product-info">
											<a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
											<div class="wrap-price"><span class="product-price">$250.00</span></div>
										</div>
									</div>

								
								</div>
							</div>							
						</div>
					</div>
				</div>
			</div>

			<!--Product Categories-->
			<div class="wrap-show-advance-info-box style-1">
				<h3 class="title-box">Danh mục sản phẩm</h3>
				<div class="wrap-top-banner">
					<a href="#" class="link-banner banner-effect-2">
						<figure><img src="{{asset('public/assets/images/fashion-accesories-banner.jpg')}}" width="1170" height="240" alt=""></figure>
					</a>
				</div>
				<div class="wrap-products">
					<div class="wrap-product-tab tab-style-1">
						<div class="tab-control">
							@foreach($all_brand as $key => $brand)
							<a href="{{'#'.$brand->brand_id}}" class="tab-control-item ">{{$brand->brand_name}}</a>
							@endforeach
						</div>
						<div class="tab-contents">

							<div class="tab-content-item active" id="{{$brand->brand_id}}">
								<div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container" data-items="5" data-loop="false" data-nav="true" data-dots="false" data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}' >

									<div class="product product-style-2 equal-elem ">
										<div class="product-thumnail">
											<a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
												<figure><img src="{{asset('public/assets/images/products/fashion_01.jpg')}}" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
											</a>
											<div class="group-flash">
												<span class="flash-item new-label">new</span>
											</div>
											<div class="wrap-btn">
												<a href="#" class="function-link">quick view</a>
											</div>
										</div>
										<div class="product-info">
											<a href="#" class="product-name"><span>Lois Caron LCS-4027 Analog Watch - For Men</span></a>
											<div class="wrap-price"><span class="product-price">$250.00</span></div>
										</div>
									</div>
								</div>
							</div>

						


					</div>
				</div>
			</div>			
 @endsection
