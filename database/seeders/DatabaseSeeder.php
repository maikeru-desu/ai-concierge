<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Plan;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();


        Plan::create([
            'name' => 'Starter',
            'price' => '5',
            'description' => 'For users who are only staying for a short period.',
            'duration' => '7'
        ]);

        Plan::create([
            'name' => 'Traveler',
            'price' => '10',
            'description' => 'Relevant for users that will stay for a month.',
            'duration' => '30'
        ]);

        Plan::create([
            'name' => 'Soujourner',
            'price' => '20',
            'description' => 'Best for users that will stay more than a month.',
            'duration' => '90'
        ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
