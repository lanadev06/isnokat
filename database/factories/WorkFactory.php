<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Company;
use App\Models\Employer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Work>
 */
class WorkFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'employer_id' => Employer::inRandomOrder()->first()->id,
            'category_id' => Category::inRandomOrder()->first()->id,
            'company_id' => Company::inRandomOrder()->first()->id,
            'viewed' => rand(100, 500),
            'name' => fake()->jobTitle(),
            'description' => fake()->paragraph($nbSentences = 3, $variableNbSentences = true),
            'salary' => fake()->numberBetween($min = 0, $max = 9000),
            'work_type' => fake()->randomElement(['remote', 'onsite', 'hybrid']),
            'work_time' => fake()->randomElement(['daily', 'monthly', 'yearly']),
        ];
    }
}
