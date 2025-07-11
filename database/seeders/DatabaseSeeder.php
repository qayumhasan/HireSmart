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
        User::factory()->create([
            'name' => 'Admin User',
            'email' => 'admin@gmail.com',
            'role' => User::ROLE_ADMIN,
        ]);

        User::factory()->create([
            'name' => 'Employer User',
            'email' => 'employer@gmail.com',
            'role' => User::ROLE_EMPLOYER,
        ]);

        User::factory()->create([
            'name' => 'Candidate User',
            'email' => 'candidate@gmail.com',
            'role' => User::ROLE_CANDIDATE,
        ]);
    }
}
