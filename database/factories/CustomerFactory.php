<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Customer>
 */
class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            
            'last_name'     =>  fake()->lastName(),
            'first_name'    =>  fake()->firstName(),
            'email'         =>  fake()->email(),
            'phone_number'  =>  fake()->numerify('###########'),
            'address'       =>  fake()->address(),
        ];
    }
}
