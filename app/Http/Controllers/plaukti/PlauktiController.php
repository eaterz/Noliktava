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

    public function add(Request $request, $categoryId){
        // Retrieve the category name from the request
        $categoryName = $request->input('name');

        // Retrieve the product IDs from the request
        $productIds = $request->input('products');

        // Check if products are selected
        if ($productIds && is_array($productIds)) {
            // Find the products by their IDs
            $products = Product::where('id', $productIds)->get();

            // Update the category for each product
            foreach ($products as $product) {
                $product->category = $categoryName;
                $product->save();
            }
        }

        // Redirect to the dashboard
        return redirect('/plaukti/show/' . $categoryId);
    }

    public function remove(){

    }



}
