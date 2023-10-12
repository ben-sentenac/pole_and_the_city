<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Event>
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
            //
            'name' => fake()->sentence(),
            'description' => fake()->paragraph(),
            'location' => fake()->address(),
            'date' => fake()->date(),
            'time' => fake()->time(),
            'ticket_price' => fake()->randomFloat(2, 0, 100),
            'max_attendees' => fake()->numberBetween(10, 100),
            'registration_deadline' => fake()->dateTimeBetween('now', '+1 month'),
        ];
    }
}
