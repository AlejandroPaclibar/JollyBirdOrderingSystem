<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Order;
use App\Models\PaymentTransaction;
use Illuminate\Http\Request;

class PaymentTransactionController extends Controller
{
    public function index() 
    {
       $payment_transaction = PaymentTransaction::orderBy('id')->get();

        return view('payment_transaction.index', ['payment_transactions' =>$payment_transaction]);
    }

    public function create() {
        $orders = Order::list();
        return view('payment_transaction.create', ['orders' => $orders]);
    }

    public function store(Request $request) {

        $request->validate([
            'order_id' => 'required|numeric',
            'transaction_date' =>  'required|date',
            'amount' => 'required|numeric',
            'payment_method' => 'required',
            'transaction_status' => 'required'
       
        ]);

        PaymentTransaction::create([
            'order_id' => $request->order_id,
            'transaction_date' =>  $request->transaction_date,
            'amount' => $request->amount,
            'payment_method' => $request->payment_method,
            'transaction_status' =>  $request->transaction_status
        ]);

        return redirect('/payment_transactions')->with('message', 'A new payment has been added to list of transactions');
        
    }

    public function edit(PaymentTransaction $payment_transaction) {
        $orders = Order::list();
        return view('payment_transaction.edit',['orders' => $orders], compact('payment_transaction'));
    }

    public function update(PaymentTransaction $payment_transaction, Request $request) {
        
        $request->validate([
            'order_id' => 'required|numeric',
            'transaction_date' =>  'required|date',
            'amount' => 'required|numeric',
            'payment_method' => 'required',
            'transaction_status' => 'required'

        ]);

       $payment_transaction->update($request->all());
        return redirect('/payment_transactions')->with('message', "id: $payment_transaction->id has been updated successfully");
    }

    public function delete(PaymentTransaction $payment_transaction) {

       $payment_transaction->delete();

        return redirect('/payment_transactions')->with('message', "id: $payment_transaction->id has been deleted successfully");
    }
}
