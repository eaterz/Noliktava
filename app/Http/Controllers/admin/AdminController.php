<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function index()
    {
        return view('admin.dashboard');
    }

    // Product create
    public function products(){
        $products = Product::all();
        return view('admin.product', compact('products'));
    }

    public function create()
    {
        return view('admin.productCreate');
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
        $product->price = $request->input('price');
        $product->save();

        return redirect('/admin/products');
    }
    public function edit($id)
    {
        $product = Product::find($id);
        return view('admin.productEdit', compact("product"));
    }
    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'brand' => 'required',
            'price' => 'required|numeric',
            'image' => 'required|url',
        ]);

        $product = Product::find($request->id);
        $product->name = $request->input('name');
        $product->brand = $request->input('brand');
        $product->price = $request->input('price');
        $product->image = $request->input('image');
        $product->save();

        return redirect('/admin/products');
    }

    public function destroy($id)
    {
        $product = Product::find($id);
        if ($product) {
            $product->delete();
        }

        return redirect('/admin/products');
    }

}
