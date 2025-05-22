<?php

namespace Database\Factories;

use App\Models\Proposal;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ProposalItem>
 */
class ProposalItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'proposal_id' => Proposal::factory(),
            'code' => 'ITM-' . fake()->unique()->numberBetween(100, 999),
            'name' => fake()->words(2, true),
            'quantity' => fake()->numberBetween(1, 10),
            'section' => fake()->randomElement(['All Day Dining', 'Living Room', 'Bedroom']),
            'specs' => json_encode([
                'finish' => fake()->colorName(),
                'dimensions' => fake()->randomNumber(2) . 'x' . fake()->randomNumber(2),
            ]),
        ];
    }
}
