<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Finpen>
 */
class FinpenFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => mt_rand(1, 2),
            'saldo' => $this->faker->numberBetween(1000, 1000000),
            'book_name' => $this->faker->name,
            'province' => $this->faker->state,
            'description' => $this->faker->paragraph,
        ];
    }
}
