@extends('user.main')
@section('content')


				<div class="col-lg-9 col-md-8 col-sm-8 col-xs-12 main-content-area">
					<div class="wrap-product-detail">
					@foreach($product_detail as $value => $pro)
						<div class="detail-media">
							<div class="product-gallery">
							  <ul class="slides">
                                  @foreach($pro->image_product as $value)
							    <li data-thumb="{{URL::to('/') }}/public/upload/product/{{$value->url}}">
							    	<img src="{{URL::to('/') }}/public/upload/product/{{$value->url}}" alt="product thumbnail" />
							    </li>
                                @endforeach
							  </ul>
							</div>
						</div>
						<form action="{{url('/save_cart')}}" method="POST">
						{{csrf_field()}}
							<div class="detail-info">
								
								<h2 class="product-name">{{$pro->product_name}}</h2>
								<div class="short-desc">
									<ul>
										<li>{{$pro->product_detail}}</li>
									</ul>
								</div>
								<div class="wrap-social">
									<a class="link-socail" href="#"><img src="{{asset('public/assets/images/social-list.png')}}" alt=""></a>
								</div>
								<div class="wrap-price"><span class="product_price">{{number_format($pro->price)}}.VND</span></div>
								<div class="stock-info in-stock">
									<p class="availability">Tình trạng: <b>Còn hàng</b></p>
								</div>
								<div class="quantity">
									<span>Quantity:</span>
									<div class="quantity-input">
                                        <input type="text" name="product_quatity" value="1" data-max="120" pattern="[0-9]*" >
										<input type="hidden" name="product_id_hidden" value="{{$pro->product_id}}"  >
										<a class="btn btn-reduce" href="#"></a>
										<a class="btn btn-increase" href="#"></a>
									</div>
								</div>
								<div class="wrap-butons">
									<button  type="submit" class="btn add-to-cart">Thêm vào giỏ hàng</button>
								</div>
							</div>
						</form>
						<div class="advance-info">
							<div class="tab-control normal">
								<a href="#description" class="tab-control-item active">description</a>
								<a href="#add_infomation" class="tab-control-item">Addtional Infomation</a>	
							</div>
							<div class="tab-contents">
								<div class="tab-content-item active" id="description">
									<p>{{$pro->product_detail}}</p>
									
								</div>
								<div class="tab-content-item " id="add_infomation">
									<table class="shop_attributes">
										<tbody>
											<tr>
												<th>Weight</th><td class="product_weight" >{{$pro->mass}}</td>
											</tr>
											<tr>
												<th>Dimensions</th><td class="product_dimensions">{{$pro->size}}</td>
											</tr>
											<tr>
												<th>Camera</th><td><p></p>{{$pro->camera}}</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>

						@endforeach
					</div>
				</div><!--end main products area-->

				<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 sitebar">
					<div class="widget widget-our-services ">
						<div class="widget-content">
							<ul class="our-services">

								<li class="service">
									<a class="link-to-service" href="#">
										<i class="fa fa-truck" aria-hidden="true"></i>
										<div class="right-content">
											<b class="title">Free Shipping</b>
											<span class="subtitle">On Oder Over $99</span>
											<p class="desc">Lorem Ipsum is simply dummy text of the printing...</p>
										</div>
									</a>
								</li>

								<li class="service">
									<a class="link-to-service" href="#">
										<i class="fa fa-gift" aria-hidden="true"></i>
										<div class="right-content">
											<b class="title">Special Offer</b>
											<span class="subtitle">Get a gift!</span>
											<p class="desc">Lorem Ipsum is simply dummy text of the printing...</p>
										</div>
									</a>
								</li>

								<li class="service">
									<a class="link-to-service" href="#">
										<i class="fa fa-reply" aria-hidden="true"></i>
										<div class="right-content">
											<b class="title">Order Return</b>
											<span class="subtitle">Return within 7 days</span>
											<p class="desc">Lorem Ipsum is simply dummy text of the printing...</p>
										</div>
									</a>
								</li>
							</ul>
						</div>
					</div><!-- Categories widget-->

					<div class="widget mercado-widget widget-product">
						<h2 class="widget-title">Popular Products</h2>
						<div class="widget-content">
							<ul class="products">
								<li class="product-item">
									<div class="product product-widget-style">
										<div class="thumbnnail">
											<a href="detail.html" title="Radiant-360 R6 Wireless Omnidirectional Speaker [White]">
												<figure><img src="{{asset('public/assets/images/products/digital_01.jpg')}}" alt=""></figure>
											</a>
										</div>
										<div class="product-info">
											<a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker...</span></a>
											<div class="wrap-price"><span class="product-price">$168.00</span></div>
										</div>
									</div>
								</li>

								<li class="product-item">
									<div class="product product-widget-style">
										<div class="thumbnnail">
											<a href="detail.html" title="Radiant-360 R6 Wireless Omnidirectional Speaker [White]">
												<figure><img src="{{asset('public/assets/images/products/digital_17.jpg')}}" alt=""></figure>
											</a>
										</div>
										<div class="product-info">
											<a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker...</span></a>
											<div class="wrap-price"><span class="product-price">$168.00</span></div>
										</div>
									</div>
								</li>

								<li class="product-item">
									<div class="product product-widget-style">
										<div class="thumbnnail">
											<a href="detail.html" title="Radiant-360 R6 Wireless Omnidirectional Speaker [White]">
												<figure><img src="{{asset('public/assets/images/products/digital_18.jpg')}}" alt=""></figure>
											</a>
										</div>
										<div class="product-info">
											<a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker...</span></a>
											<div class="wrap-price"><span class="product-price">$168.00</span></div>
										</div>
									</div>
								</li>

								<li class="product-item">
									<div class="product product-widget-style">
										<div class="thumbnnail">
											<a href="detail.html" title="Radiant-360 R6 Wireless Omnidirectional Speaker [White]">
												<figure><img src="{{asset('public/assets/images/products/digital_20.jpg')}}" alt=""></figure>
											</a>
										</div>
										<div class="product-info">
											<a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker...</span></a>
											<div class="wrap-price"><span class="product-price">$168.00</span></div>
										</div>
									</div>
								</li>

							</ul>
						</div>
					</div>

				</div><!--end sitebar-->
			</div><!--end row-->

@endsection