<?php

namespace App\Http\Controllers\plaukti;
use App\Http\Controllers\Controller;
use App\Models\category;
use App\Models\Product;
use Illuminate\Http\Request;

class PlauktiController extends Controller
{


    public function index()
    {
        $categories = Category::all();
        $products = Product::all();
        return view('plaukti.dashboard',compact('products','categories'));
    }

    public function show($id)
    {
        $category = Category::find($id);
        $products = Product::all();
        return view('plaukti.show',compact('category','products'));
    }

    public function add(Request $request, $categoryId)
    {
        $category = $request->input('name');
        $productIds = $request->input('products');
        if ($productIds) {
            foreach ($productIds as $productId) {
                $product = Product::find($productId);
                if ($product) {
                    $product->category = $category;
                    $product->save();
                }
            }
        }
        return redirect()->route('plaukti.show', $categoryId);
    }

    public function remove(Request $request, $categoryId) {
        $productId = $request->input('id');
        $product = Product::find($productId);
        if ($product) {
            $product->category = 'none';
            $product->save();
        }
        return redirect('/plaukti/show/' . $categoryId);
    }




}
