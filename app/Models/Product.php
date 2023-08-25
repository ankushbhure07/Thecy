<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory;    
    
    protected $table = "products";
    protected $fillables = ["product_name", "product_price", "product_type", "gender", "product_color", "product_size", "product_desc", "product_image"];
}
