<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use SebastianBergmann\Type\NullType;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $product = Product::all();
        return view('dashboard/products', compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard/add-products');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'product_name' => 'required',
            'product_price' => 'required|numeric',
            'product_type' => 'required',
            'product_image' => 'required',
            'product_desc' => 'required',
        ]);        
        $sizes = $request->product_size;
        $sizesObject = json_encode($sizes);        

        $store = new Product();
        $store->product_name = $request->product_name;
        $store->product_price = $request->product_price;
        $store->product_type = $request->product_type; 
        if($sizesObject != 'null'){
            $store->product_size = $sizesObject;
        }       
        $store->gender = $request->gender;
        $store->product_color = $request->product_color;
        $store->product_desc = $request->product_desc;

        $image = $request->file('product_image');
        // dd($image);
        if ($image != '') {
            $image_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('product_image'), $image_name);
            $store->product_image = $image_name;
        }
        $store->save();

        if ($store) {
            return redirect('product')->with('success', 'Product has been added!!');
        } else {
            return redirect('product')->with('fail', 'Something Went wrong!! Adarsh ki galti hogi');
        }
        // dd($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $update = Product::findorfail($id);
        return view('dashboard/update', compact('update'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'product_name' => 'required',
            'product_price' => 'required|numeric',
            'product_type' => 'required',        
            'product_desc' => 'required',
        ]);     
        // dd($request->all());       
        $update = Product::findorfail($id);
        $sizes = $request->product_size;
        $sizesObject = json_encode($sizes);        

        $update->product_name = $request->product_name;
        $update->product_price = $request->product_price;
        $update->product_type = $request->product_type; 
        if($sizesObject != 'null'){
            $update->product_size = $sizesObject;
        }else{
            $update->product_size = NULL;
        }
        $update->gender = $request->gender;
        $update->product_color = $request->product_color;
        $update->product_desc = $request->product_desc;

        $image = $request->file('product_image');
        if ($image != '') {
            $image_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('product_image'), $image_name);
            $update->product_image = $image_name;
        }else{
            $update->product_image = $request->old_product_image;
        }
        $update->save();

        if ($update) {
            return redirect('product')->with('success', 'Product has been updated!!');
        } else {
            return redirect('product')->with('fail', 'Something Went wrong!! Adarsh ki galti hogi');
        }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $delete = Product::findorfail($id);
        $delete->delete();

        if ($delete) {
            return redirect('product')->with('success', 'Product deleted sucessfully!!');
        } else {
            return redirect('product')->with('fail', 'Something Went wrong!! Adarsh ki galti hogi');
        }
    }
}
