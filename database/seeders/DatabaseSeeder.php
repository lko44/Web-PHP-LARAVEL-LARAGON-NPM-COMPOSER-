<?php

namespace Database\Seeders;

use App\Models\Classroom;
use App\Models\Guardian;
use App\Models\Subject;
use App\Models\Teacher;
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
        Teacher::factory()->count(10)->create();

        User::factory()->create([
            "name" => "Admin",
            "email" => "",
        ]);

        Subject:: factory(4)
        ->hasTeacher(1)
        ->create();
    }
}
