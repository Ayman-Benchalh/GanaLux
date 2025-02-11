<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Coupon;
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
        $this->call([
            // UserSeeder::class,
            ProductSeeder::class,
        ]);
        // Coupon::factory(20)->create();

        // Seed Orders and OrderItems
        // Order::factory(20)->create()->each(function ($order) {
        //     OrderItem::factory(rand(1, 5))->create([
        //         'order_id' => $order->id,
        //     ]);
        // });
    }

}
