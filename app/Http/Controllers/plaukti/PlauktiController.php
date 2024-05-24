<?php

namespace App\Http\Controllers\plaukti;
use App\Http\Controllers\Controller;
use App\Models\category;
use App\Models\Product;

class PlauktiController extends Controller
{


    public function index()
    {
        $categories = Category::all();
        $products = Product::all();
        return view('plaukti.dashboard',compact('products','categories'));
    }

}
