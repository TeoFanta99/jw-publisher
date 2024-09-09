<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Preacher>
 */
class PreacherFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'firstname' => fake() -> firstname(),
            'lastname' => fake() -> lastname(),
            'pioneer' => fake() -> boolean(),
            'english' => fake() -> numberBetween(1, 3);
        ];
    }
}
