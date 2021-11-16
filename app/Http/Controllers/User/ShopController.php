<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use App\ulitilize\UUID;
use Carbon\Carbon;
use App\Models\Product;

class ShopController extends Controller
{
    public function getShop()
    {
        $all_brand = DB::table('tbl_brand')->orderBy('brand_id')->whereNull('deleted_at')->get();
        $all_harddisk = DB::table('tbl_harddisk')->orderBy('harddisk_id')->whereNull('deleted_at')->get();
        $all_ram = DB::table('tbl_ram')->orderBy('ram_id')->whereNull('deleted_at')->get();
        $all_cpu = DB::table('tbl_cpu')->orderBy('cpu_id')->whereNull('deleted_at')->get();
        $all_class = DB::table('tbl_class')->orderBy('class_id')->whereNull('deleted_at')->get();
        $all_screen = DB::table('tbl_screen')->orderBy('screen_id')->whereNull('deleted_at')->get();
        $all_card = DB::table('tbl_card')->orderBy('card_id')->whereNull('deleted_at')->get();
        $all_product = Product::with('image_product')->orderBy('product_id')->whereNull('deleted_at')->get();
        return view('user.category.category')->with('all_product',$all_product)->with('all_brand',$all_brand)->with('all_harddisk',$all_harddisk)->with('all_ram',$all_ram)
        ->with('all_cpu',$all_cpu)->with('all_class',$all_class)->with('all_screen',$all_screen)->with('all_card',$all_card);

    }
}
