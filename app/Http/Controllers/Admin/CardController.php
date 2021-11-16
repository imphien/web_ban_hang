<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use App\ulitilize\UUID;
use Carbon\Carbon;

class CardController extends Controller
{
    public function getAddCard()
    {
        $category_card = DB::table('tbl_categorycard')
                        ->whereNull('deleted_at')
                        ->orderby('category_card_id','DESC')
                        ->get();
        return view('admin.card.add_card')->with('category_card',$category_card);
    }

    public function saveCard(Request $request)
    {
        $data = array();
        $card_id = new UUID();
        $data['card_id'] = $card_id->gen_uuid();
        $data['card_detail'] = $request->card_detail;
        $data['category_card_id'] = $request->category_card_id;

        $result = DB::table('tbl_card')->insert($data);

        if($result)
        {
            Session::flash('success','Thêm danh mục card thành công');
        }else{
            Session::flash('error','Thêm danh mục card thất bại');
        }

        return Redirect('/admin/add_card');
    }

    public function getAllCard()
    {
        $all_card =  DB::table('tbl_card')
                    ->join('tbl_categorycard','tbl_card.category_card_id','=','tbl_categorycard.category_card_id')
                    ->whereNull('tbl_card.deleted_at')->get();
        return view('admin.card.all_card')->with('all_card',$all_card);
    }

    public function editCard($card_id)
    {
        $edit_card =  DB::table('tbl_card')
                    ->where('card_id',$card_id)
                    ->whereNull('tbl_card.deleted_at')->get();
        $category_card = DB::table('tbl_categorycard')
                    ->whereNull('deleted_at')
                    ->orderby('category_card_id','DESC')
                    ->get();
        return view('admin.card.edit_card')->with('edit_card',$edit_card)->with('category_card',$category_card);
    }

    public function updateCard(Request $request,$card_id)
    {
        $data = array();
        $data['card_detail'] = $request->card_detail;
        $data['category_card_id'] = $request->category_card_id;

        $result = DB::table('tbl_card')->where('card_id',$card_id)->update($data);
        if($result)
        {
            Session::flash('success','Sửa card thành công');
        }else{
            Session::flash('error','Sủa card thất bại');
        }

        return Redirect('/admin/all_card');
    }
}
