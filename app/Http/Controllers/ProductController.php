<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;


class ProductController extends Controller
{


    public function create()
    {
        return view('noliktava.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'image' => 'required',
            'description' => 'required',
            'SKU' => 'required',
            'category' => 'required',
            'price' => 'required',
        ]);

        $product = new Product();
        $product->name = $request->input('name');
        $product->image = $request->input('image');
        $product->description = $request->input('description');
        $product->SKU = $request->input('SKU');
        $product->category = $request->input('category');
        $product->price = $request->input('price');
        $product->save();

        return redirect('/noliktava/dashboard');
    }
}
