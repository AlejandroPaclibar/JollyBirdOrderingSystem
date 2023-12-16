<?php

namespace Database\Factories;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order_item>
 */
class OrderItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            
            'order_id'       =>  fake()->randomElement(Order::pluck('id')),
            'product_id'     =>  fake()->randomElement(Product::pluck('id')),
            'quantity'       =>  fake()->numberBetween(100,1000),
            'price'          =>  fake()->numberBetween(1000,10000)
        ];
    }
}


