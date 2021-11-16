@extends('user.main')
@section('content')
<div class=" main-content-area">
   
				<div class="wrap-address-billing">
					<h3 class="box-title">Thông tin khách hàng</h3>
                    <form action="{{url('/save_checkout_customer')}}" method="post">
					{{csrf_field()}}
						<p class="row-in-form">
							<label for="lname">Tên<span>*</span></label>
							<input id="lname" type="text" name="customer_name" value="" placeholder="Nhập tên ">
						</p>
						<p class="row-in-form">
							<label for="email">Email:</label>
							<input id="email" type="email" name="customer_email" value="" placeholder="Nhập email ">
						</p>
						<p class="row-in-form">
							<label for="phone">Số điện thoại<span>*</span></label>
							<input id="phone" type="number" name="customer_phone" value="" placeholder="Nhập số điện thoại">
						</p>
						<p class="row-in-form">
							<label for="add">Địa chỉ giao hàng:</label>
							<input id="add" type="text" name="customer_address" value="" placeholder="Nhập địa chỉ giao hàng">
						</p>
                        <p class="row-in-form">
							<label for="add">Ghi chú:</label>
							<input id="add" type="text" name="note" value="" placeholder="Nhập ghi chú">
						</p>
                        <input type="submit" class="btn btn-medium" value="Xác nhận đặt hàng"></input>
                        </form>
				</div>
				
   
			</div><!--end main content area-->
@endsection