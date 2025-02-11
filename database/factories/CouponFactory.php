<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Coupon>
 */
class CouponFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        return [
            'code' => strtoupper($this->faker->unique()->lexify('COUPON????')), // Random coupon code
            'discount' => $this->faker->numberBetween(5, 50), // Discount percentage between 5% and 50%
            'min_purchase' => $this->faker->randomFloat(2, 20, 200), // Random minimum purchase between 20 and 200
            'expires_at' => $this->faker->dateTimeBetween('now', '+1 year'), // Expiry date up to 1 year
        ];
    }
}
