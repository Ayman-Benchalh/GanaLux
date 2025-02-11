<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\ProductImage;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Product::factory(8)->create()->each(function ($product) {
            ProductImage::factory(rand(1, 4))->create(['product_id' => $product->id]);
        });
    }
}
