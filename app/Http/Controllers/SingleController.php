<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class SingleController extends Controller
{
    public function index($id)
    {
        $product = Product::findOrfail($id); 
        $allProduct = Product::all();
        $limitedRows = $allProduct->where('product_type', 'Upper')->take(6);        
        return view('single', compact('product', 'limitedRows', 'allProduct'));
    }
}
