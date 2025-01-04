<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class AttenderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            // 'id' => $this->faker->unique()->randomNumber(),
            'name' => $this->faker->name(),
            'last_name' => $this->faker->lastName(),
            'last_second_name' => $this->faker->lastName(),
            'voice' => $this->faker->randomElement(['soprano', 'alto', 'tenor', 'bajo']),
        ];
    }
}
