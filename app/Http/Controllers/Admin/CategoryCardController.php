<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use App\ulitilize\UUID;
use Carbon\Carbon;

class CategoryCardController extends Controller
{
    public function getAddCategoryCard()
    {
        return view('admin.category_card.add_category_card');
    }

    public function saveCategoryCard(Request $request)
    {
        $data = array();
        $categorycard_id = new UUID();
        $data['category_card_id'] = $categorycard_id->gen_uuid();
        $data['category_card_name'] = $request->category_card_name;

        $result = DB::table('tbl_categorycard')->insert($data);

        if($result)
        {
            Session::flash('success','Thêm danh mục card thành công');
        }else{
            Session::flash('error','Thêm danh mục card thất bại');
        }

        return Redirect('/admin/add_category_card');
    }

    public function getAllCategoryCard()
    {
        $all_category_card =  DB::table('tbl_categorycard')->whereNull('deleted_at')->get();
        return view('admin.category_card.all_category_card')->with('all_category_card',$all_category_card);
    }

    public function deleteCategoryCard($category_card_id)
    {
        $deleted_time = Carbon::now();
        DB::table('tbl_categorycard')->where('category_card_id',$category_card_id)->update(['deleted_at'=>$deleted_time]);
        Session::flash('success','Xóa danh mục cart thành công');
        return Redirect('/admin/all_category_card');
    }

    public function editCategoryCard($category_card_id)
    {
        $edit_category_card =  DB::table('tbl_categorycard')->where('category_card_id',$category_card_id)->whereNull('deleted_at')->get();
        return view('admin.category_card.edit_category_card')->with('edit_category_card',$edit_category_card);
    }

    public function updateCategoryCard(Request $request,$category_card_id)
    {
        $data = array();
        $data['category_card_name'] = $request->category_card_name;

        $result = DB::table('tbl_categorycard')->where('category_card_id',$category_card_id)->update($data);
        if($result)
        {
            Session::flash('success','Sửa nhãn hiệu card thành công');
        }else{
            Session::flash('error','Sủa nhãn hiệu card thất bại');
        }

        return Redirect('/admin/all_category_card');
    }
}
