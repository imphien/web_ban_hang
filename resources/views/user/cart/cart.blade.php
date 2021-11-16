@extends('user.main')
@section('content')
<div class=" main-content-area">
                   
                
				<div class="wrap-iten-in-cart">
                <h3 class="box-title">Products Name</h3>
                    <?php
                    $content = Cart::content();
                    ?>
					<ul class="products-cart">
                    @foreach($content as $v_content)
						<li class="pr-cart-item">
							<div class="product-image">
								<figure><img src="{{ URL::to('/') }}/public/upload/product/{{$v_content->options->image}}" alt=""></figure>
							</div>
							<div class="product-name">
								<a class="link-to-product" href="#">{{$v_content->name}}</a>
							</div>
							<div class="price-field produtc-price"><p class="price">{{number_format($v_content->price)}}.VND</p></div>
							<div class="quantity">
								<form action="{{url('/update_cart_quantity')}}" method="post">
									{{csrf_field()}}
									<input name="cart_quatity" value="{{$v_content->qty}}" type="number" >	
									<input type="hidden" name="rowId_cart" value="{{$v_content->rowId}}" class="form-control">	
									<input type="submit" name="update_quantity" value="Cập nhật" class="btn btn-default btn-sm">
								</form>								
							</div>
							<div class="price-field sub-total">
                                <p class="price">
                                    <?php
                                        $total_price = $v_content->price * $v_content->qty;
                                        echo number_format($total_price).''.'VND';
                                    ?>
                                </p>
                            </div>
							<div class="">
								<a href="{{url('/delete_to_cart/'.$v_content->rowId)}}" class="btn btn-delete" title="">
									<i class="fa fa-times-circle" aria-hidden="true"></i>
								</a>
							</div>
						</li>	
                    @endforeach								
					</ul>
				</div>

				<div class="summary">
					<div class="order-summary">
						<h4 class="title-box">Order Summary</h4>
						<p class="summary-info"><span class="title">Tổng tiền</span><b class="index">{{Cart::total()}}.VND</b></p>
						<p class="summary-info"><span class="title">Phí giao hàng</span><b class="index">Free Shipping</b></p>
						<p class="summary-info total-info "><span class="title">Tiền cần thanh toán</span><b class="index">{{Cart::total()}}.VND</b></p>
					</div>
					<div class="checkout-info">
						<label class="checkbox-field">
							<input class="frm-input " name="have-code" id="have-code" value="" type="checkbox"><span>I have promo code</span>
						</label>
						<a class="btn btn-checkout" href="{{url('/checkout')}}">Check out</a>
						<a class="link-to-shop" href="shop.html">Continue Shopping<i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
					</div>
					<div class="update-clear">
						<a class="btn btn-clear" href="#">Clear Shopping Cart</a>
						<a class="btn btn-update" href="#">Update Shopping Cart</a>
					</div>
				</div>
               	
			</div><!--end main content area-->

@endsection