<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'product_name'      =>  fake()->randomElement(['Jolly Hotdog Meal', 'Chickenjoy Bucket', 'Jolly Spaghetti Family Pack',
                                    'Burger Steak Value Meal', 'Halo-Halo Sundae']),
            'description'       =>  fake()->sentence(),
            'price'             =>  fake()->numberBetween(1000,10000)
        ];
    }
}

