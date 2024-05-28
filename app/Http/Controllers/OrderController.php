<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Orders;

class OrderController extends Controller
{

    public function index()
    {
        $products = Product::all();
        $order = Orders::all();
        return view('noliktava.orders', compact('products', 'order'));
    }

    public function create()
    {
        $products = Product::all();

        return view('noliktava.ordercreate', compact('products'));
    }

    public function add(Request $request)
    {
        $order = $request->input('name');
        $productIds = $request->input('products');
        if ($productIds) {
            foreach ($productIds as $productId) {
                $product = Product::find($productId);
                if ($product) {
                    $product->category = $order;
                    $product->save();
                }
            }
        }
        return redirect()->route('noliktava.dashboard');
    }

    public function remove(Request $request, $OrderId)
    {
        $productId = $request->input('id');
        $product = Product::find($productId);
        if ($product) {
            $product->category = 'none';
            $product->save();
        }
        return redirect('/noliktava/dashboard/' . $OrderId);
    }
}
