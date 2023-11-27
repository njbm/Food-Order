<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BackendController extends Controller
{

    public function dashboard()
    {
        return view('backend.pages.dashboard');
    }

    public function country()
    {
        return view('backend.pages.Address.Country.All_Country');
    }

    public function category()
    {
        return view('backend.categories.categoryList');
    }

    public function show(string $id)
    {
        //
    }

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
