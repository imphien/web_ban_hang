<aside>
    <div id="sidebar" class="nav-collapse">
        <!-- sidebar menu start-->
        <div class="leftside-navigation">
            <ul class="sidebar-menu" id="nav-accordion">
                <li>
                    <a class="active" href="index.html">
                        <i class="fa fa-dashboard"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-book"></i>
                        <span>Quản lý nhãn hàng</span>
                    </a>
                    <ul class="sub">
						<li><a href="{{url('admin/all_brand')}}">Danh sách nhãn hàng</a></li>
						<li><a href="{{url('admin/add_brand')}}">Thêm nhãn hàng</a></li>
                    </ul>
                </li> 
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-book"></i>
                        <span>Quản lý thương hiệu card</span>
                    </a>
                    <ul class="sub">
						<li><a href="{{url('admin/all_category_card')}}">Danh sách thương hiệu card đồ họa</a></li>
						<li><a href="{{url('admin/add_category_card')}}">Thêm thương hiệu card đồ họa</a></li>
                    </ul>
                </li>  
                
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-book"></i>
                        <span>Quản lý card</span>
                    </a>
                    <ul class="sub">
						<li><a href="{{url('admin/all_card')}}">Danh sách card</a></li>
						<li><a href="{{url('admin/add_card')}}">Thêm card</a></li>
                    </ul>
                </li>

                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-book"></i>
                        <span>Quản lý sản phẩm</span>
                    </a>
                    <ul class="sub">
						<li><a href="{{url('admin/all_product')}}">Danh sách sản phẩm</a></li>
						<li><a href="{{url('admin/add_product')}}">Thêm sản phẩm</a></li>
                    </ul>
                </li>
            </ul>            
        </div>
        <!-- sidebar menu end-->
    </div>
</aside>