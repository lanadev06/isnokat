<?php

namespace Database\Factories;

use App\Models\Company;
use App\Models\Employer;
use App\Models\Work;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employer>
 */
class EmployerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'company_id' => Company::inRandomOrder()->first()->id,
            'name' => fake()->firstName(),
            'surname' => fake()->lastName(),
            'email' => fake()->unique()->safeEmail(),
            'phone' => fake()->phoneNumber(),
            'remember_token' => Str::random(10),
        ];
    }
}
