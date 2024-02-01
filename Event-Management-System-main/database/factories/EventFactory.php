<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Event;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'date' => fake()->date(),
            'startTime' => fake()->time(),
            'endTime' => fake()->time(),
            'city' => fake()->city(),
            'state' => fake()->state(),
            'country' => fake()->country(),
            'description' => fake()->text(),
            'price' => fake()->numberBetween(0, 9999)
        ];
    }
}