<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Task;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       Task::factory()->create([
        'name' => 'Supermarket',
        'description' => 'I have to buy milk and eggs',
       ]);
       Task::factory()->create([
        'name' => 'Gym',
        'description' => 'I have to workout tomorrow',
       ]);
    }
}
