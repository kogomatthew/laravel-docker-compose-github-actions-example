<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\Invite;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Invite>
 */
class InviteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'token' => $this->faker->uuid(),
            'message' => $this->faker->sentence(), // Add this line to the factory definition
            'status' => $this->faker->randomElement(['active', 'pending']),
        ];
    }
}
