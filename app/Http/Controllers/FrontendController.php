<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{

    public function index()
    {
        return view('frontend.home');
    }


    public function contact()
    {
        return view('frontend.contact');
    }

    public function blog()
    {
        return view('frontend.blog');
    }

    public function  cart()
    {
        return view('frontend.cart');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function cat_by_product()
    {
        return view('frontend.cat-by-product');
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
