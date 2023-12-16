<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;


    public function order_items() {
        return $this->hasMany(OrderItem::class);
    }

    public static function list(){
        $products = Product::orderByRaw('id')->get();
        $list = [];

        foreach ($products as $product){
            $list[$product->id] = $product->product_name;
        }
        return $list;
    }

    protected $fillable = [
        'product_name',
        'description',
        'price'
    ];
}
