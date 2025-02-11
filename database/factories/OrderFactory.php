<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory(), // Associate with a random user
            'status' => $this->faker->randomElement(['pending', 'completed', 'canceled']),
            'total' => $this->faker->randomFloat(2, 50, 1000), // Random total amount
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
