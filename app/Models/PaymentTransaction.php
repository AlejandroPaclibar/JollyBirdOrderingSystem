<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentTransaction extends Model
{
    use HasFactory;
    public function order() {
        return $this->belongsTo(Order::class);
    }

    protected $fillable = [
        'order_id',
        'transaction_date',
        'amount',
        'payment_method',
        'transaction_status'
   
    ];
}
