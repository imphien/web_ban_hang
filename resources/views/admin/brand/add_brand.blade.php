@extends('admin.layout.dashboard')
@section('admin_content')
<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Thêm nhãn hàng
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
                                <form role="form" action="{{url('admin/save_brand')}}" method="post">
                                {{csrf_field()}}
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên nhãn hàng</label>
                                    <input  class="form-control" name="brand_name"  placeholder="Tên danh mục">
                                </div>
                                <button name="add_category_product" type="submit" class="btn btn-info">Thêm danh mục</button>
                                </form>
                            </div>
                        </div>
                    </section>

            </div>
</div>
@endsection