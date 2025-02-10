<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function cart()
    {
        return view('Shop/cart');
    }
    
    public function checkout()
    {
        return view('Shop/checkout');
    }
    
    public function contact()
    {
        return view('Shop/contact');
    }
    
    public function productDetails()
    {
        return view('Shop/productDetails');
    }
    
    public function products()
    {
        return view('Shop/products');
    }
    
}
