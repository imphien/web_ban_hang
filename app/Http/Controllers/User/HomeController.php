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

class HomeController extends Controller
{
    public function getHome()
    {
        $all_brand = DB::table('tbl_brand')->orderBy('brand_id')->whereNull('deleted_at')->get();
        return view('user.layout.home')->with('all_brand',$all_brand);
    }
}
