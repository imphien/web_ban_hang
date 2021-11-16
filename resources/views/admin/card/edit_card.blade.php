@extends('admin.layout.dashboard')
@section('admin_content')
<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Sửa card
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
                            @foreach($edit_card as $key => $card)
                                <div class="position-center">
                                    <form role="form" action="{{url('admin/update_card/'.$card->card_id)}}" method="post">
                                    {{csrf_field()}}
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Chi tiết card</label>
                                        <input value="{{$card->card_detail}}"  class="form-control" name="card_detail"  placeholder="Chi tiết card đồ họa">
                                    </div>
                                    <div class="form-group">
                                    <label for="exampleInputPassword1">Thương hiệu card</label>
                                            <select name="category_card_id" class="form-control input-sm m-bot15">
                                                @foreach($category_card as $value => $cate)
                                                    @if($card->category_card_id == $cate->category_card_id)
                                                    <option selected value="{{$cate->category_card_id}}">{{$cate->category_card_name}}</option>
                                                    @else
                                                    <option value="{{$cate->category_card_id}}">{{$cate->category_card_name}}</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <button name="add_card" type="submit" class="btn btn-info">Sửa </button>
                                    </form>
                                </div>
                            @endforeach
                        </div>
                    </section>

            </div>
            @endsection