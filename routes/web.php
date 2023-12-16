<?php

use App\Http\Controllers\CustomerController;
use App\http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderItemController;
use App\Http\Controllers\PaymentTransactionController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'home'])->name('home');


Route::get('/customers', [CustomerController::class, 'index'])->name('customers');
Route::get('/customers/create', [CustomerController::class, 'create'])->name('cutomers');
Route::post('/customers/create', [CustomerController::class, 'store'])->name('cutomers');
Route::get('/customers/{customer}', [CustomerController::class, 'edit'])->name('cutomers');
Route::patch('/customers/{customer}', [CustomerController::class, 'update'])->name('cutomers');
Route::delete('/customers/delete/{customer}', [CustomerController::class, 'delete'])->name('cutomers');

Route::get('/orders', [OrderController::class, 'index'])->name('orders');
Route::get('/orders/create', [OrderController::class, 'create'])->name('orders');
Route::post('/orders/create', [OrderController::class, 'store'])->name('orders');
Route::get('/orders/{order}', [OrderController::class, 'edit'])->name('orders');
Route::patch('/orders/{order}', [OrderController::class, 'update'])->name('orders');
Route::delete('/orders/delete/{order}', [OrderController::class, 'delete'])->name('orders');

Route::get('/ordered_items', [OrderItemController::class, 'index'])->name('ordered_items');
Route::get('/ordered_items/create', [OrderItemController::class, 'create'])->name('ordered_items');
Route::post('/ordered_items/create', [OrderItemController::class, 'store'])->name('ordered_items');
Route::get('/ordered_items/{order_item}', [OrderItemController::class, 'edit'])->name('ordered_items');
Route::patch('/ordered_items/{order_item}', [OrderItemController::class, 'update'])->name('ordered_items');
Route::delete('/ordered_items/delete/{order_item}', [OrderItemController::class, 'delete'])->name('ordered_items');

Route::get('/products', [ProductController::class, 'index'])->name('products');
Route::get('/products/create', [ProductController::class, 'create'])->name('products');
Route::post('/products/create', [ProductController::class, 'store'])->name('products');
Route::get('/products/{product}', [ProductController::class, 'edit'])->name('products');
Route::patch('/products/{product}', [ProductController::class, 'update'])->name('products');
Route::delete('/products/delete/{product}', [ProductController::class, 'delete'])->name('products');

Route::get('/payment_transactions', [PaymentTransactionController::class, 'index'])->name('payment_transactions');
Route::get('/payment_transactions/create', [PaymentTransactionController::class, 'create'])->name('payment_transactions');
Route::post('/payment_transactions/create', [PaymentTransactionController::class, 'store'])->name('payment_transactions');
Route::get('/payment_transactions/{payment_transaction}', [PaymentTransactionController::class, 'edit'])->name('payment_transactions');
Route::patch('/payment_transactions/{payment_transaction}', [PaymentTransactionController::class, 'update'])->name('payment_transactions');
Route::delete('/payment_transactions/delete/{payment_transaction}', [PaymentTransactionController::class, 'delete'])->name('payment_transactions');