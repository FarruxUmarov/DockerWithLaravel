<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ad>
 */
class AdFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->name(),
            'description' => $this->faker->name(),
            'price' => $this->faker->numberBetween(100, 10000),
            'rooms' => $this->faker->numberBetween(1, 5),
            'address' => $this->faker->address(),
            'gender' => $this->faker->randomElement(['male', 'female']),
            'branch_id' => \App\Models\Branch::inRandomOrder()->first()->id ?? null,
            'status_id' => \App\Models\Status::inRandomOrder()->first()->id ?? null,
            'user_id' => \App\Models\User::inRandomOrder()->first()->id ?? null,
        ];
    }
}
