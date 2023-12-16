<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() 
    {
        $product = Product::orderBy('id')->get();

        return view('product.index', ['products' => $product]);
    }

    public function create() {
        return view('product.create');
    }

    public function store(Request $request) {

        $request->validate([
            'product_name' => 'required',
            'description' => 'required',
            'price' => 'required|numeric'     
        ]);

        Product::create([
            'product_name' => $request->product_name,
            'description' => $request->description,
            'price' => $request->price
        ]);

        return redirect('/products')->with('message', 'A new product has been placed');
        
    }

    public function edit(Product $product) {

        return view('product.edit',compact('product'));
    }

    public function update(Product $product, Request $request) {
        
        $request->validate([
            'product_name' => 'required',
            'description' => 'required',
            'price' => 'required|numeric'  

        ]);

        $product->update($request->all());
        return redirect('/products')->with('message', " updated successfully");
    }

    public function delete(Product $product) {

        $product->delete();

        return redirect('/products')->with('message', "$product->product_name has been deleted successfully");
    }
}
