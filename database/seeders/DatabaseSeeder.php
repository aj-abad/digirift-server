<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Task;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Hash;
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
            'id' => 1,
            'name' => 'Tim Henson',
            'email' => 'tim@example.com',
            'password' => Hash::make('tim123'),
        ]);
        User::factory()->create([
            'id' => 2,
            'name' => 'Scott LePage',
            'email' => 'scott@example.com',
            'password' => Hash::make('scott123'),
        ]);

        foreach ([
            [
                'name' => 'Task 1',
                'user_id' => 1,
                'status' => 'todo'
            ],
            [
                'name' => 'Task 2',
                'user_id' => 2,
                'status' => 'todo'
            ],
        ] as $task) {
            $taskModel = new Task($task);
            $taskModel->save();
        }
    }
}
