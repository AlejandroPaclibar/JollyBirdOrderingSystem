<?php

namespace App\Http\Controllers;

use App\Models\OrderItem;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class OrderItemController extends Controller
{
    public function index() 
    {
        $order_item = OrderItem::orderBy('id')->get();

        return view('order_item.index', ['ordered_items' => $order_item]);
    }

    public function create() {
        $orders = Order::list();
        $products = Product::list();
        return view('order_item.create', ['orders' => $orders, 'products' => $products]);
    }

    public function store(Request $request) {

        $request->validate([
            'order_id' => 'required|numeric',
            'product_id' => 'required|numeric',
            'quantity' => 'required|numeric',
            'price' => 'required|numeric'

        ]);

        OrderItem::create([
            'order_id' => $request->order_id,
            'product_id' => $request->product_id,
            'quantity' => $request->quantity,
            'price' => $request->price
        ]);

        return redirect('/ordered_items')->with('message', 'A new order has been placed');
        
    }

    public function edit(OrderItem $order_item) {

        $orders = Order::list();
        $products = Product::list();
        return view('order_item.edit', ['orders' => $orders, 'products' => $products], compact('order_item'));
    }

    public function update(OrderItem $order_item, Order $order,Request $request) {
        
        $request->validate([
            'order_id' => 'required|numeric',
            'product_id' => 'required|numeric',
            'quantity' => 'required|numeric',
            'price' => 'required|numeric'
        ]);

        $order_item->update($request->all());
        return redirect('/ordered_items')->with('message', "id: $order_item->order_id has been updated successfully");
    }

    public function delete(OrderItem $order_item, Order $order) {

        $order_item->delete();

        return redirect('/ordered_items')->with('message', "id: $order_item->product_id has been deleted successfully");
    }
}
