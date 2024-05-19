<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Tim Henson',
            'email' => 'tim@example.com',
            'password' => bcrypt('tim123'),
        ]);
        User::factory()->create([
            'name' => 'Scott LePage',
            'email' => 'scott@example.com',
            'password' => bcrypt('scott123'),
        ]);
    }
}
