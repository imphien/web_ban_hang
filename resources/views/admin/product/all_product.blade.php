@extends('admin.layout.dashboard')
@section('admin_content')
<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      Liệt kê sản phẩm
    </div>
    @if(Session::has('success'))
			<div class="alert alert-success">
				{{Session::get('success')}}
			</div>
		@endif
    <div class="row w3-res-tb">
      <div class="col-sm-5 m-b-xs">
        <select class="input-sm form-control w-sm inline v-middle">
          <option value="0">Bulk action</option>
          <option value="1">Delete selected</option>
          <option value="2">Bulk edit</option>
          <option value="3">Export</option>
        </select>
        <button class="btn btn-sm btn-default">Apply</button>                
      </div>
      <div class="col-sm-4">
      </div>
      <div class="col-sm-3">
        <div class="input-group">
          <input type="text" class="input-sm form-control" placeholder="Search">
          <span class="input-group-btn">
            <button class="btn btn-sm btn-default" type="button">Go!</button>
          </span>
        </div>
      </div>
    </div>
    <div class="table-responsive">
      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
            <th style="width:20px;">
              <label class="i-checks m-b-none">
                <input type="checkbox"><i></i>
              </label>
            </th>
            <th>Tên sản phẩm</th>
            <th>Giá</th>
            <th>Giảm giá</th>
            <th>Cân nặng sản phẩm</th>
            <th>Kích thước màn hính </th>
            <th>Camera</th>
            <th>CPU</th>
            <th>Ổ cứng</th>
            <th>Nhãn hiệu</th>
            <th>RAM</th>
            <th>Màn hình</th>
            <th>Card</th>
            <th>Dòng sản phẩm</th>
            <th>Hình sản phẩm</th>
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>
          @foreach($all_product as $key => $pro)
          <tr>
            <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
            <td>{{$pro->product_name}}</td>
            <td>{{$pro->price}}</td>
            <td>{{$pro->discount}}</td>
            <td>{{$pro->mass}}</td>
            <td>{{$pro->size}}</td>
            <td>{{$pro->camera}}</td>
            <td>{{$pro->cpu_name}}</td>
            <td>{{$pro->capacity_harddisk}}</td>
            <td>{{$pro->brand_name}}</td>
            <td>{{$pro->ram_detail}}</td>
            <td>{{$pro->screen_detail}}</td>
            <td>{{$pro->card_detail}}</td>
            <td>{{$pro->class_name}}</td>
            <td>    
            @foreach($pro->image_product as $value )
            {{$value->url}}
            @endforeach
            </td>
            <td>
              <a href="{{url('/admin/edit_product/'.$pro->product_id)}}" class="active styling-edit" ui-toggle-class="">
                <i class="fa fa-pencil-square-o text-success text-active"></i>
              </a>
              <a onclick="return confirm('Bạn có muốn xóa  sản phẩm này ?')" href="{{url('/admin/delete_product/'.$pro->product_id)}}" class="active styling-delete" ui-toggle-class="">
                <i class="fa fa-times text-danger text"></i>
              </a>
            </td>
          </tr>
          @endforeach
         
        </tbody>
      </table>
    </div>
    <footer class="panel-footer">
      <div class="row">
        
        <div class="col-sm-5 text-center">
          <small class="text-muted inline m-t-sm m-b-sm">showing 20-30 of 50 items</small>
        </div>
        <div class="col-sm-7 text-right text-center-xs">                
          <ul class="pagination pagination-sm m-t-none m-b-none">
            <li><a href=""><i class="fa fa-chevron-left"></i></a></li>
            <li><a href="">1</a></li>
            <li><a href="">2</a></li>
            <li><a href="">3</a></li>
            <li><a href="">4</a></li>
            <li><a href=""><i class="fa fa-chevron-right"></i></a></li>
          </ul>
        </div>
      </div>
    </footer>
  </div>
</div>
@endsection