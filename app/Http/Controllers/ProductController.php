<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Orders;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        $orders = Orders::all();
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
        ]);

        $product = new Product();
        $product->name = $request->input('name');
        $product->brand = $request->input('brand');
        $product->price = $request->input('price');
        $product->save();

        return redirect('/noliktava/dashboard');
    }
    public function edit($id)
    {
        $product = Product::find($id);
        return view('noliktava.edit', compact("product"));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'brand' => 'required',
            'price' => 'required|numeric',
        ]);

        $product = Product::findOrFail($id);
        $product->update($request->except(['_token']));

        return redirect()->route('noliktava.dashboard')->with('success', 'Product updated successfully');
    }

    public function delete($id)
    {
        $product = Product::find($id);
        if ($product) {
            $product->delete();
        }

        return redirect('/noliktava/dashboard');
    }
}
