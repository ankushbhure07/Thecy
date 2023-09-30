<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('contact');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'number' => 'required|numeric',
            'fabric' => 'required',
            'inquiry' => 'required',
            'canwecall' => 'required',
        ]);
        // dd($request);
        
        $store = new Contact();
        $store->name = $request->name;
        $store->email = $request->email;
        $store->number = $request->number;
        $store->fabric = $request->fabric;
        $store->inquiry = $request->inquiry;
        $store->canwecall = $request->canwecall;

        $store->save();

        if($store){ 
            return redirect('contact')->with('success', 'Thank you for reaching out. We will respond promptly.');
        }else{            
            return redirect('contact')->with('fail', 'Something went wrong!!');
        }

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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
