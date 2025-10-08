<?php

namespace Database\Factories;

use App\Models\Classroom;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'Birthday' => $this->faker->date('Y-m-d', '2010-12-31'), // random date before 2010
            'classroom_id' => Classroom::factory(),
            'email' => $this->faker->unique()->safeEmail(),
            'adress' => $this->faker->city(),
            // 'Grade' => $this->faker->randomElement([
            //     '11 PPLG 1',
            //     '11 PPLG 2',
            //     '10 PPLG 1',
            //     '10 PPLG 2',
            //     '10 PPLG 3'
            // ]),
        ];
    }
}
