@extends('admin.layout.dashboard')
@section('admin_content')
<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Thêm nhãn hiệu card đồ họa
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
                            @foreach($edit_category_card as $key => $edit_cate)
                            <div class="position-center">
                                <form role="form" action="{{url('admin/update_category_card/'.$edit_cate->category_card_id)}}" method="post">
                                {{csrf_field()}}
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên danh mục card</label>
                                    <input value="{{$edit_cate->category_card_name}}"  class="form-control" name="category_card_name"  placeholder="Tên danh mục card">
                                </div>
                                <button name="update_category_product" type="submit" class="btn btn-info">Cập nhật</button>
                                </form>
                            </div>
                            @endforeach
                        </div>
                    </section>

            </div>
</div>
@endsection