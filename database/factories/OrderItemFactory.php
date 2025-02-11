<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Order;
use App\Models\Product;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\OrderItem>
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
            'order_id' => Order::factory(), // Associate with a random order
            'product_id' => Product::factory(), // Associate with a random product
            'quantity' => $this->faker->numberBetween(1, 10), // Random quantity
            'price' => $this->faker->randomFloat(2, 10, 500), // Random price
        ];
    }
}
