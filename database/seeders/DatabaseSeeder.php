<?php

namespace Database\Seeders;

use App\Models\Classroom;
use App\Models\Guardian;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Student;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Guardian::factory()->count(10)->create();

        User::factory()->create([
            "name" => "Admin",
            "email" => "",
        ]);

        Classroom:: factory(4)
        ->hasStudents(5)
        ->create();
    }
}
