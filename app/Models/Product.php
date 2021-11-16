<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = "tbl_product";
    protected $primaryKey = "product_id"; 
    protected $keyType = 'string';

    public function image_product(){
        return $this->hasMany('App\Models\ImagesProduct','product_id','product_id');
    }
}
