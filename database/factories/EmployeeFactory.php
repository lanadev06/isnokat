<?php

namespace Database\Factories;

use App\Models\Employee;
use App\Models\Work;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employee>
 */
class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->firstName(),
            'surname' => fake()->lastName(),
            'email' => fake()->unique()->safeEmail(),
            'phone' => fake()->phoneNumber(),
        ];
    }

    public function configure()
    {
        return $this->afterCreating(function (Employee $employee) {
            $employee->works()->attach(Work::factory(3)->create()->pluck('id'));
        });
    }
}
