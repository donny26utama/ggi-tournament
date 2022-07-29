<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class LeaderboardFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'uuid' => $this->faker->uuid,
            'game_id' => rand(1, 10),
            'user_id' => rand(1, 10),
            'score' => rand(1000, 100000),
        ];
    }
}
