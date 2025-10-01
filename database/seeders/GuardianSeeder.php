<?php

namespace Database\Seeders;

use App\Models\Guardian;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GuardianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Guardian::factory()->count(10)->create();

        User::factory()->create([
            "name" => "Admin",
            "email" => "admin@example.com",
        ]);
    }
}
