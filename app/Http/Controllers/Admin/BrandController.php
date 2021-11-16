<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use App\ulitilize\UUID;
use Carbon\Carbon;
use App\Models\Brand;

class BrandController extends Controller
{
    public function getAddBrand()
    {
        return view('admin.brand.add_brand');
    }

    public function postAddBrand(Request $request)
    {
        $data = array();
        $brand_id = new UUID();
        $data['brand_id'] = $brand_id->gen_uuid();
        $data['brand_name'] = $request->brand_name;

        $result = DB::table('tbl_brand')->insert($data);
        if($result)
        {
            Session::flash('success','Thêm danh mục thành công');
        }else{
            Session::flash('error','Thêm danh mục thất bại');
        }

        return Redirect('/admin/add_brand');
    }

    public function getAllBrand()
    {
        $all_brand =  DB::table('tbl_brand')->whereNull('deleted_at')->get();
        return view('admin.brand.all_brand')->with('all_brand',$all_brand);
    }

    public function deleteBrand($brand_id)
    {
        $deleted_time = Carbon::now();
        DB::table('tbl_brand')->where('brand_id',$brand_id)->update(['deleted_at'=>$deleted_time]);
        Session::flash('success','Xóa danh mục sản phẩm thành công');
        return Redirect('/admin/all_brand');
    }

    public function editBrand($brand_id)
    {
        $all_brand =  DB::table('tbl_brand')->where('brand_id',$brand_id)->whereNull('deleted_at')->get();
        return view('admin.brand.edit_brand')->with('all_brand',$all_brand);
    }

    public function updateBrand(Request $request,$brand_id)
    {
        $data = array();
        $data['brand_name'] = $request->brand_name;

        $result = DB::table('tbl_brand')->where('brand_id',$brand_id)->update($data);
        if($result)
        {
            Session::flash('success','Sửa nhãn hiệu thành công');
        }else{
            Session::flash('error','Sủa nhãn hiệu thất bại');
        }

        return Redirect('/admin/add_brand');
    }

}
