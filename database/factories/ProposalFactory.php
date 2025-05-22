<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Proposal>
 */
class ProposalFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id' => User::factory(),
            'project_name' => fake()->words(3, true),
            'project_code' => fake()->unique()->numberBetween(1000, 9999),
            'client_name' => fake()->company(),
            'issue_date' => fake()->dateBetween('-1 year', '+1 year'),
            'status' => fake()->randomElement(['pending', 'approved', 'rejected']),
        ];
    }
}
