<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class HomeController extends Controller
{
    public function index()
    {
        $all = Product::all();
        $product = $all->take(8);        
        return view('index', compact('product'));
    }
    public function items()
    {
        $product = Product::all();
        return view('items', compact('product'));
    }
    public function gifting()
    {
        $product = Product::all();
        return view('gifting', compact('product'));
    }
}
