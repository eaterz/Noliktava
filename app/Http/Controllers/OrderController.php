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
        $order = Orders::all();

        return view('noliktava.ordercreate', compact('order'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'created' => 'required|date',
            'deadline' => 'required|date',
        ]);

        $order = new Orders();
        $order->name = $request->input('name');
        $order->created = $request->input('created');
        $order->deadline = $request->input('deadline');
        $order->save();

        return redirect('/noliktava/orders');
    }
    public function finishOrder(Request $request, $orderId)
    {
        $order = Orders::find($orderId);

        if ($order) {
            $order->status = 'finished';
            $order->save();
        }

        return redirect()->route('noliktava.orders');
    }
    public function show($id)
    {
        $order = Orders::find($id);
        $products = Product::all();
        return view('noliktava.show', compact('order', 'products'));
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
