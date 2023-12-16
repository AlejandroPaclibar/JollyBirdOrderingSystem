<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    public function customer() {
        return $this->belongsTo(Customer::class);
    }

    public function order_items() {
        return $this->hasMany(OrderItem::class);
    }

    public function payment_transactions() {
        return $this->hasMany(PaymentTransaction::class);
    }

    protected $fillable = [
        'customer_id',
        'order_number',
        'order_date',
        'total_amount'
   
    ];

    public static function list(){
        $orders = Order::orderByRaw('id')->get();
        $list = [];

        foreach ($orders as $order){
            $list[$order->id] = $order->order_number;
        }
        return $list;
    }
}
