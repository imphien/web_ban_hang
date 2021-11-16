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
                                <form role="form" action="{{url('admin/save_category_card')}}" method="post">
                                {{csrf_field()}}
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên nhãn hiệu card đồ họa</label>
                                    <input  class="form-control" name="category_card_name"  placeholder="Tên nhãn hiệu card">
                                </div>
                                <button name="add_category_card" type="submit" class="btn btn-info">Thêm </button>
                                </form>
                            </div>
                        </div>
                    </section>

            </div>
</div>
@endsection