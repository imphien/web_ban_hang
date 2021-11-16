@extends('admin.layout.dashboard')
@section('admin_content')
<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Sửa sản phẩm
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
                                @foreach($edit_product as $key => $pro)
                                    <form role="form" action="{{url('admin/update_product/'.$pro->product_id)}}" method="post" enctype="multipart/form-data">
                                        {{csrf_field()}}
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Tên sản phẩm</label>
                                            <input  class="form-control" name="product_name" value="{{$pro->product_name}}" >
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Giá </label>
                                            <input  class="form-control" name="product_price"  value="{{$pro->price}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Hình ảnh </label>
                                            <input type="file"  class="form-control" name="images[]" multiple >
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Mô tả </label>
                                            <textarea style="resize:none" row="5" class="form-control" name="product_detail" >{{$pro->product_detail}}</textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Camera </label>
                                            <input  class="form-control" name="camera" value="{{$pro->camera}}" >
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Cân nặng</label>
                                            <input  class="form-control" name="mass" value="{{$pro->mass}}" >
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Kích thước màn hình</label>
                                            <input  class="form-control" name="size" value="{{$pro->size}}" >
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Giảm giá(%)</label>
                                            <input  class="form-control" name="discount" value="{{$pro->discount}}" >
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">CPU</label>
                                            <select name="cpu_id" class="form-control input-sm m-bot15">
                                                @foreach($all_cpu as $key => $cpu)
                                                    @if($pro->cpu_id == $cpu->cpu_id)
                                                    <option selected value="{{$cpu->cpu_id}}">{{$cpu->cpu_name}}</option>
                                                    @else
                                                    <option value="{{$cpu->cpu_id}}">{{$cpu->cpu_name}}</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Ổ cứng</label>
                                            <select name="harddisk_id" class="form-control input-sm m-bot15">
                                                @foreach($all_harddisk as $key => $harddisk)
                                                    @if($pro->harddisk_id == $harddisk->harddisk_id)
                                                    <option selected value="{{$harddisk->harddisk_id}}">{{$harddisk->capacity_harddisk}}</option>
                                                    @else
                                                    <option value="{{$harddisk->harddisk_id}}">{{$harddisk->capacity_harddisk}}</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">RAM</label>
                                            <select name="ram_id" class="form-control input-sm m-bot15">
                                                @foreach($all_ram as $key => $ram)
                                                    @if($pro->ram_id == $ram->ram_id)
                                                    <option selected value="{{$ram->ram_id}}">{{$ram->ram_detail}}</option>
                                                    @else
                                                    <option value="{{$ram->ram_id}}">{{$ram->ram_detail}}</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Màn hình</label>
                                            <select name="screen_id" class="form-control input-sm m-bot15">
                                                @foreach($all_screen as $key => $screen)
                                                    @if($pro->screen_id == $screen->screen_id)
                                                    <option selected value="{{$screen->screen_id}}">{{$screen->screen_detail}}</option>
                                                    @else
                                                    <option value="{{$screen->screen_id}}">{{$screen->screen_detail}}</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Card đồ họa</label>
                                            <select name="card_id" class="form-control input-sm m-bot15">
                                                @foreach($all_card as $key => $card)
                                                    @if($pro->card_id == $card->card_id)
                                                    <option selected value="{{$card->card_id}}">{{$card->card_detail}}</option>
                                                    @else
                                                    <option value="{{$card->card_id}}">{{$card->card_detail}}</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Dòng sản phẩm</label>
                                            <select name="class_id" class="form-control input-sm m-bot15">
                                                @foreach($all_class as $key => $class)
                                                @if($pro->class_id == $class->class_id)
                                                    <option selected value="{{$class->class_id}}">{{$class->class_name}}</option>
                                                    @else
                                                    <option value="{{$class->class_id}}">{{$class->class_name}}</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Hãng</label>
                                            <select name="brand_id" class="form-control input-sm m-bot15">
                                                @foreach($all_brand as $key => $brand)
                                                    @if($pro->brand_id == $brand->brand_id)
                                                    <option selected value="{{$brand->brand_id}}">{{$brand->brand_name}}</option>
                                                    @else
                                                    <option value="{{$brand->brand_id}}">{{$brand->brand_name}}</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>
                                        <button name="edit_product" type="submit" class="btn btn-info">Sửa sản phẩm</button>
                                    </form>
                                @endforeach
                            </div>
                        </div>
                    </section>
            </div>
</div>
@endsection