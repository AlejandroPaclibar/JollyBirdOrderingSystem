<?php

namespace Database\Factories;

use App\Models\Order;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Payment_transaction>
 */
class PaymentTransactionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            
            'order_id'               =>  fake()->randomElement(Order::pluck('id')),
            'transaction_date'       =>  fake()->dateTime(),
            'amount'                 =>  fake()->numberBetween(1000,10000),
            'payment_method'         =>  fake()->randomElement(['cash', 'gcash', 'check']),
            'transaction_status'     =>  fake()->randomElement(['Order Placed', 'Payment confirmed', 'Order Processing',
                                         'Food Preparation', 'Out for Delivery', 'Delivered'])
        ];
    }
}
