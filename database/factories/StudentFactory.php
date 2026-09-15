<?php

namespace Database\Factories;

use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Student>
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
            'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'university' => fake()->randomElement([
                'University of Swabi',
                'University of Peshawar',
                'University of Islamabad',
                'Islamia College Peshawar',
                'COMSATS University Islamabad',
                'NUST',
                'University of Malakand',
            ]),
            'department' => fake()->randomElement([
                'Computer Science',
                'Software Engineering',
                'Information Technology',
                'Electrical Engineering',
                'Business Administration',
            ]),
            'subject' => fake()->randomElement([
                'Web Development',
                'Database Systems',
                'Data Structures',
                'Operating Systems',
                'Computer Networks',
                'Software Engineering',
                'Artificial Intelligence',
            ]),
            'semester' => fake()->numberBetween(1, 8),
            'phone' => fake()->phoneNumber(),
        ];
    }
}
