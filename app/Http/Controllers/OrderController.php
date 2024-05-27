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
        $orders = Orders::all();
        return view('noliktava.orders', compact('products', 'orders'));
    }
}
