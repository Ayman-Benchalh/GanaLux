<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Create Admin


        User::factory()->create([
            'name' => 'Admin User',
            'email' => 'admin@ganalux.com',
            'password' => Hash::make('admin@ganalux.com'), // Using Hash::make() for secure password hashing
            'role' => 'admin',
        ]);


        // Create Two Regular Users
        // User::factory()->count(2)->create([
        //     'role' => 'user', // Or 'store_manager' based on your use case
        // ]);
    }
}
