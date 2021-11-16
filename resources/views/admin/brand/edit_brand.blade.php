@extends('admin.layout.dashboard')
@section('admin_content')
<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Chỉnh sửa nhãn hàng
                        </header>
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
                        <div class="panel-body">
                            @foreach($all_brand as $key => $brand)
                            <div class="position-center">
                                <form role="form" action="{{url('admin/update_brand/'.$brand->brand_id)}}" method="post">
                                {{csrf_field()}}
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên danh mục</label>
                                    <input value="{{$brand->brand_name}}"  class="form-control" name="brand_name"  placeholder="Tên danh mục">
                                </div>
                                <button name="update_category_product" type="submit" class="btn btn-info">Cập nhật nhãn hàng</button>
                                </form>
                            </div>
                            @endforeach
                        </div>
                    </section>

            </div>
</div>
@endsection