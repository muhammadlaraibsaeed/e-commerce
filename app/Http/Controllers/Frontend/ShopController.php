<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("users.frontend.shops.index");
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
        //
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

    public function about()
    {
        return view("users.frontend.pages.about");
    }

    public function shoppingDetail()
    {
         return view("users.frontend.pages.shoppingDetail");
    }

    public function shoppingCart()
    {
         return view("users.frontend.pages.shoppingCart");
    }

    public function  checkout()
    {
        return view("users.frontend.pages.checkout");
    }
    
    public function blogDetails()
    {
        return view("users.frontend.pages.blogDetails");
    }
}
