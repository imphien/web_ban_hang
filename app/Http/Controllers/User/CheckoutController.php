<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use App\ulitilize\UUID;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Cart;

class CheckoutController extends Controller
{
    public function getCheckout()
    {
        return view('user.checkout.checkout');
    }

    public function saveCheckout(Request $request)
    {
        $data = array();
        $id = new UUID();
        $order_id = $id->gen_uuid();
        $data['customer_name'] = $request->customer_name;
        $data['email'] = $request->customer_email;
        $data['customer_phone_number'] = $request->customer_phone;
        $data['customer_address'] = $request->customer_address;
        $data['note'] = $request->note;
        $data['date'] = Carbon::now();
        $data['order_id'] = $order_id;

        $result = DB::table('tbl_order')->insert($data);
        $tmp = DB::table('tbl_order')->where('order_id',$order_id)->first();
        $content = Cart::content();
        foreach($content as $v_content)
        {
        $order_detail['order_id'] = $tmp->order_id;
        $order_detail['product_id'] = $v_content->id;
        $order_detail['quantity'] = $v_content->qty;
        DB::table('tbl_orderdetail')->insert($order_detail);
        }
        Cart::destroy();

        return Redirect('/home');

    }
}
