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
use Illuminate\Database\Eloquent\Collection;

class ProductController extends Controller
{
    public function getProduct($product_id)
    {
        $product_detail = Product::with('image_product')
        ->join('tbl_cpu','tbl_cpu.cpu_id','=','tbl_product.cpu_id')
        ->join('tbl_harddisk','tbl_harddisk.harddisk_id','=','tbl_product.harddisk_id')
        ->join('tbl_brand','tbl_brand.brand_id','=','tbl_product.brand_id')
        ->join('tbl_ram','tbl_ram.ram_id','=','tbl_product.ram_id')
        ->join('tbl_screen','tbl_product.screen_id','=','tbl_screen.screen_id')
        ->join('tbl_card','tbl_product.card_id','=','tbl_card.card_id')
        ->join('tbl_class','tbl_product.class_id','=','tbl_class.class_id')
        ->whereNull('tbl_product.deleted_at')
        ->where('tbl_product.product_id',$product_id)
        ->orderby('created_at','desc')
        ->select('tbl_product.product_id','product_name','cpu_name','capacity_harddisk','brand_name','ram_detail','card_detail','class_name','screen_detail','mass',
        'price','discount','size','camera','product_detail','tbl_product.created_at','tbl_product.deleted_at','tbl_product.updated_at')
        ->get();

        return view('user.product.product_detail')->with('product_detail',$product_detail);
    }
}
