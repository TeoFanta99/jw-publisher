<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Timeslot>
 */
class TimeslotFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'day' => fake() -> dayOfWeek(),
            'timeslot' => fake() -> word(),
            'activity' => fake() -> word(),
            'place' => fake() -> word(),
        ];
    }
}
