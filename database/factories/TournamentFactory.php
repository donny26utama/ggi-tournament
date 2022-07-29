<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TournamentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $start_at = $this->faker->dateTimeBetween();
        $end_at = date('Y-m-d', strtotime($start_at.' +14days'));

        return [
            'uuid' => $this->faker->uuid,
            'name' => $this->faker->words(rand(1, 3), true),
            'start_at' => $this->faker->dateTimeBetween()
        ];
    }
}
