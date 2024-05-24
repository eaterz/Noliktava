<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('noliktava.dashboard', compact('products'));
    }

    public function create()
    {
        return view('noliktava.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'brand' => 'required',
            'price' => 'required|numeric',
            'image' => 'required|url',
        ]);

        $product = new Product();
        $product->name = $request->input('name');
        $product->brand = $request->input('brand');
        $product->image = $request->input('image');
        $product->price = $request->input('price');
        $product->save();

        return redirect('/noliktava/dashboard');
    }
    public function edit($id)
    {
        $product = Product::find($id);
        return view('noliktava.edit');
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'brand' => 'required',
            'price' => 'required|numeric',
            'image' => 'required|url',
        ]);

        $product = Product::find($id);
        if ($product) {
            $product->name = $request->input('name');
            $product->brand = $request->input('brand');
            $product->image = $request->input('image');
            $product->price = $request->input('price');
            $product->save();
        }

        return redirect('/noliktava/dashboard');
    }

    public function destroy($id)
    {
        $product = Product::find($id);
        if ($product) {
            $product->delete();
        }

        return redirect('/noliktava/dashboard');
    }
}
