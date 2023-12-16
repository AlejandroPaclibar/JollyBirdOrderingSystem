<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index() 
    {
       $order = Order::orderBy('id')->get();

        return view('order.index', ['orders' =>$order]);
    }

    public function create() {
        $customers = Customer::list();
        return view('order.create', ['customers' => $customers]);
    }

    public function store(Request $request) {

        $request->validate([
            'customer_id' => 'required|numeric',
            'order_number' =>  'required|string',
            'order_date' => 'required|date',
            'total_amount' => 'required|numeric'
       
        ]);

        Order::create([
            'customer_id' => $request->customer_id,
            'order_number' => $request->order_number,
            'order_date' => $request->order_date,
            'total_amount' => $request->total_amount

        ]);

        return redirect('/orders')->with('message', 'A new order has been added to list of orders');
        
    }

    public function edit(Order $order) {
        $customers = Customer::list();
        return view('order.edit',['customers' => $customers], compact('order'));
    }

    public function update(Order $order, Request $request) {
        
        $request->validate([
            'customer_id' => 'required|numeric',
            'order_number' =>  'required|string',
            'order_date' => 'required|date',
            'total_amount' => 'required|numeric'

        ]);

       $order->update($request->all());
        return redirect('/orders')->with('message', "Order $order->order_number has been updated successfully");
    }

    public function delete(Order $order) {

       $order->delete();

        return redirect('/orders')->with('message', "Order $order->order_number has been deleted successfully");
    }
}
