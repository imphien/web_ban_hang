<?php

namespace App\Http\Controllers\Admin;

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
    public function getAddProduct()
    {
        $all_cpu = DB::table('tbl_cpu')->orderby('cpu_id','DESC')->get();
        $all_brand = DB::table('tbl_brand')->orderby('brand_id','DESC')->get();
        $all_harddisk = DB::table('tbl_harddisk')->orderby('harddisk_id','DESC')->get();
        $all_screen = DB::table('tbl_screen')->orderby('screen_id','DESC')->get();
        $all_card = DB::table('tbl_card')->orderby('card_id','DESC')->get();
        $all_class = DB::table('tbl_class')->orderby('class_id','DESC')->get();
        $all_ram = DB::table('tbl_ram')->orderby('ram_id','DESC')->get();

        return view('admin.product.add_product')->with('all_cpu',$all_cpu)->with('all_brand',$all_brand)->with('all_harddisk',$all_harddisk)
        ->with('all_screen',$all_screen)->with('all_card',$all_card)->with('all_class',$all_class)->with('all_ram',$all_ram);
    }

    public function saveAddProduct(Request $request)
    {
      
        $data = array();
        $product_id = new UUID();
        $id = $product_id->gen_uuid();
        $data['product_id'] = $id;
        $data['product_name'] = $request->product_name;
        $data['price'] = $request->product_price;
        $data['product_detail'] = $request->product_detail;
        $data['mass'] = $request->product_mass;
        $data['size'] = $request->product_size;
        $data['discount'] = $request->product_discount;
        $data['cpu_id'] = $request->cpu_id;
        $data['harddisk_id'] = $request->harddisk_id;
        $data['ram_id'] = $request->ram_id;
        $data['card_id'] = $request->card_id;
        $data['class_id'] = $request->class_id;
        $data['brand_id'] = $request->brand_id;
        $data['camera'] = $request->camera;
        $data['screen_id'] = $request->screen_id;

        $result = DB::table('tbl_product')->insertGetId($data);
        $tmp = DB::table('tbl_product')->where('product_id',$id)->first();
        
          
        $images = array();
       
        if($files = $request->file('images'))
        {
            foreach($files as $value )
            {
               $image_name = md5(rand(1,100));
               $ext = strtolower($value->getClientOriginalExtension());
               $image_full_name = $image_name.'.'.$ext;
               $upload_path = 'public/upload/product';
               $value->move($upload_path,$image_full_name);
               $images['url'] = $image_full_name;
               $image_id = new UUID();
               $images['image_id'] = $image_id->gen_uuid();
               $images['product_id'] = $tmp->product_id;
               DB::table('tbl_imagesproduct')->insert($images);
              
            }
         }
        if($result)
            {
                Session::flash('success','Thêm sản phẩm thành công');
            }else
            {
            Session::flash('error','Thêm sản phẩm thất bại');
            }
            return Redirect('admin/add_product');
    }

    public function getAllProduct()
    {
        $all_product = Product::with('image_product')
                    ->join('tbl_cpu','tbl_cpu.cpu_id','=','tbl_product.cpu_id')
                    ->join('tbl_harddisk','tbl_harddisk.harddisk_id','=','tbl_product.harddisk_id')
                    ->join('tbl_brand','tbl_brand.brand_id','=','tbl_product.brand_id')
                    ->join('tbl_ram','tbl_ram.ram_id','=','tbl_product.ram_id')
                    ->join('tbl_screen','tbl_product.screen_id','=','tbl_screen.screen_id')
                    ->join('tbl_card','tbl_product.card_id','=','tbl_card.card_id')
                    ->join('tbl_class','tbl_product.class_id','=','tbl_class.class_id')
                    ->whereNull('tbl_product.deleted_at')
                    ->orderby('created_at','desc')
                    ->select('tbl_product.product_id','product_name','cpu_name','capacity_harddisk','brand_name','ram_detail','card_detail','class_name','screen_detail','mass',
                    'price','discount','size','camera','product_detail','tbl_product.created_at','tbl_product.deleted_at','tbl_product.updated_at')
                    ->get();
        return view('admin.product.all_product')->with('all_product',$all_product);
    }

    public function editProduct($product_id)
    {
        $all_cpu = DB::table('tbl_cpu')->orderby('cpu_id','DESC')->get();
        $all_brand = DB::table('tbl_brand')->orderby('brand_id','DESC')->get();
        $all_harddisk = DB::table('tbl_harddisk')->orderby('harddisk_id','DESC')->get();
        $all_screen = DB::table('tbl_screen')->orderby('screen_id','DESC')->get();
        $all_card = DB::table('tbl_card')->orderby('card_id','DESC')->get();
        $all_class = DB::table('tbl_class')->orderby('class_id','DESC')->get();
        $all_ram = DB::table('tbl_ram')->orderby('ram_id','DESC')->get();
        $edit_product = DB::table('tbl_product')->where('product_id',$product_id)->get();
        return view('admin.product.edit_product')->with('all_cpu',$all_cpu)->with('all_brand',$all_brand)->with('all_harddisk',$all_harddisk)
        ->with('all_screen',$all_screen)->with('all_card',$all_card)->with('all_class',$all_class)->with('all_ram',$all_ram)->with('edit_product',$edit_product);
    }

    public function updateProduct(Request $request, $product_id)
    {
        $data = array();
        $data['product_name'] = $request->product_name;
        $data['price'] = $request->product_price;
        $data['product_detail'] = $request->product_detail;
        $data['mass'] = $request->product_mass;
        $data['size'] = $request->product_size;
        $data['discount'] = $request->product_discount;
        $data['cpu_id'] = $request->cpu_id;
        $data['harddisk_id'] = $request->harddisk_id;
        $data['ram_id'] = $request->ram_id;
        $data['card_id'] = $request->card_id;
        $data['class_id'] = $request->class_id;
        $data['brand_id'] = $request->brand_id;
        $data['camera'] = $request->camera;
        $data['screen_id'] = $request->screen_id;

        $result = DB::table('tbl_product')->where('product_id',$product_id)->update($data);
        $tmp = DB::table('tbl_product')->where('product_id',$product_id)->first();  
        $images = array();
        $files = $request->file('images');
        if(isset($files))
        {
            DB::table('tbl_imagesproduct')->where('product_id',$product_id)->delete();
            foreach($files as $value )
            {
               $image_name = md5(rand(1,100));
               $ext = strtolower($value->getClientOriginalExtension());
               $image_full_name = $image_name.'.'.$ext;
               $upload_path = 'public/upload/product';
               $value->move($upload_path,$image_full_name);
               $images['url'] = $image_full_name;
               $image_id = new UUID();
               $images['image_id'] = $image_id->gen_uuid();
               $images['product_id'] = $tmp->product_id;
               DB::table('tbl_imagesproduct')->insert($images); 
            }
         }
        if($result)
            {
                Session::flash('success','Sửa sản phẩm thành công');
            }else
            {
            Session::flash('error','Sửa sản phẩm thất bại');
            }
        return Redirect('admin/all_product');   
       
    }

    public function deleteProduct($product_id)
    {
        $time = Carbon::now();
        DB::table('tbl_product')->where('product_id',$product_id)->update(['deleted_at' => Carbon::now()]);
        Session::flash('success','Xóa sản phẩm thành công');
        return Redirect('admin/all_product');
    }

}
