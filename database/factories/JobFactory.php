<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'employer_id' => \App\Models\Employer::factory(), // Associate with an Employer
            'title' => fake()->jobTitle(),
            'salary' => round(fake()->numberBetween(int1: 3000, int2: 250000), precision: -3), //'salary' => fake()->numberBetween(4, 250) * 1000,
            'location' => fake()->randomElement(['Remote', 'In-office', 'Hybrid']),
            'schedule' => fake()->randomElement(['Full-time', 'Part-time', 'Contract']),
            'url' => fake()->url(),
            'featured' => fake()->boolean(30), // 30% chance of true(featured), 70% chance of false(not featured).
            'description' => fake()->paragraph(),
        ];
    }
}
