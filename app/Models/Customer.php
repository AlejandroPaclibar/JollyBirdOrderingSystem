<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    public function orders() {
        return $this->hasMany(Order::class);
    }

    protected $fillable = [
        'last_name',
        'first_name',
        'email',
        'phone_number',
        'address',
    ];
    
    public static function list(){
        $customers = Customer::orderByRaw('id')->get();
        $list = [];

        foreach ($customers as $customer){
            $list[$customer->id] = $customer->first_name.' '.$customer->last_name;
        }
        return $list;
    }
}
