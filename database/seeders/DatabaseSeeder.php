<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Customer;
use App\Models\Order;
use App\Models\Order_item;
use App\Models\Product;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        
        $this->call(CustomerSeeder::class);

        $this->call(ProductSeeder::class); 

        $this->call(OrderSeeder::class);

        $this->call(OrderItemSeeder::class);

        $this->call(PaymentTransactionSeeder::class);
    }
}
