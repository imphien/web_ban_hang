@extends('admin.layout.dashboard')
@section('admin_content')
<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Thêm sản phẩm
                        </header>
                        <div class="panel-body">
                            <div class="position-center">
                            @if(Session::has('error'))
                                <div class="alert alert-danger">
                                    {{Session::get('error')}}
                                </div>
                            @endif

                            @if(Session::has('success'))
                                <div class="alert alert-success">
                                    {{Session::get('success')}}
                                </div>
                            @endif
                                <form role="form" action="{{url('admin/save_product/')}}" method="post" enctype="multipart/form-data">
                                {{csrf_field()}}
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên sản phẩm</label>
                                    <input  class="form-control" name="product_name" placeholder="Nhập tên sản phẩm" >
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Giá </label>
                                    <input  class="form-control" name="product_price"  placeholder="Nhập giá sản phẩm">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Hình ảnh </label>
                                    <input type="file"  class="form-control" name="images[]" multiple >
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Mô tả </label>
                                    <textarea style="resize:none" row="5" class="form-control" name="product_detail" ></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Camera </label>
                                    <textarea style="resize:none" row="5" class="form-control" name="camera" ></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Cân nặng</label>
                                    <textarea style="resize:none" row="5" class="form-control" name="product_mass"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Kích thước màn hình</label>
                                    <textarea style="resize:none" row="5" class="form-control" name="product_size"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Giảm giá(%)</label>
                                    <textarea style="resize:none" row="5" class="form-control" name="product_discount"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">CPU</label>
                                    <select name="cpu_id" class="form-control input-sm m-bot15">
                                        @foreach($all_cpu as $key => $cpu)
                                        <option value="{{$cpu->cpu_id}}">{{$cpu->cpu_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Ổ cứng</label>
                                    <select name="harddisk_id" class="form-control input-sm m-bot15">
                                        @foreach($all_harddisk as $key => $harddisk)
                                        <option value="{{$harddisk->harddisk_id}}">{{$harddisk->capacity_harddisk}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">RAM</label>
                                    <select name="ram_id" class="form-control input-sm m-bot15">
                                        @foreach($all_ram as $key => $ram)
                                        <option value="{{$ram->ram_id}}">{{$ram->ram_detail}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Màn hình</label>
                                    <select name="screen_id" class="form-control input-sm m-bot15">
                                        @foreach($all_screen as $key => $screen)
                                        <option value="{{$screen->screen_id}}">{{$screen->screen_detail}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Card đồ họa</label>
                                    <select name="card_id" class="form-control input-sm m-bot15">
                                        @foreach($all_card as $key => $card)
                                        <option value="{{$card->card_id}}">{{$card->card_detail}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Dòng sản phẩm</label>
                                    <select name="class_id" class="form-control input-sm m-bot15">
                                        @foreach($all_class as $key => $class)
                                        <option value="{{$class->class_id}}">{{$class->class_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Hãng</label>
                                    <select name="brand_id" class="form-control input-sm m-bot15">
                                        @foreach($all_brand as $key => $brand)
                                        <option value="{{$brand->brand_id}}">{{$brand->brand_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <button name="add-product" type="submit" class="btn btn-info">Thêm sản phẩm</button>
                                </form>
                            </div>
                        </div>
                    </section>
            </div>
</div>
@endsection