<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Cart;
use Session;
session_start();
class CartController extends Controller
{
    public function saveCart(Request $request)
    {
        $product_id = $request->product_id_hidden;
        $quantity = $request->product_quatity;

        $product_infor = DB::table('tbl_product')->where('product_id',$product_id)->first();
        $image = DB::table('tbl_imagesproduct')->where('product_id',$product_id)->first();
        $data['id'] = $product_infor->product_id;
        $data['qty'] = $quantity;
        $data['name'] = $product_infor->product_name;
        $data['price'] = $product_infor->price;
        $data['weight'] =$product_infor->mass;
        $data['options']['image'] = $image->url;
        Cart::add($data);
        
        return Redirect::to('/cart');
    }

    public function showCart()
    {
        return view('user.cart.cart');
    }

    public function deleteToCart($rowId)
    {
        Cart::update($rowId,0);
        return Redirect::to('/cart');
    }

    public function updateCartQuantity(Request $request)
    {
        $rowId = $request->rowId_cart;
        $qty = $request->cart_quatity;
        Cart::update($rowId,$qty);
        return Redirect::to('/cart');
    }
}
