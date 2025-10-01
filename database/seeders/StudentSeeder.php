<?php

namespace Database\Seeders;

use App\Models\Guardian;
use App\Models\Student;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class StudentSeeder extends Seeder
{
    public function run(): void
    {
        Student::factory()->count(100)->create();

        User::factory()->create([
            "name" => "Admin",
            "email" => "Default@gmail.com",
        ]);
    }
}
