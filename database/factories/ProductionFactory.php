<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Turn;
use App\Models\Location;

class ProductionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'programing_date' => $this->faker->date('Y-m-d'),
            'execute_day' => $this->faker->date('Y-m-d'),
            'week_number' => $this->faker->numberBetween($min = 1, $max = 52),
            'feed_time' => $this->faker->time($format = 'H:i:s'),
            'break_time' => $this->faker->time($format = 'H:i:s'),
            'user_id' => User::inRandomOrder()->first()->id,
            'turn_id' => Turn::inRandomOrder()->first()->id,
            'location_id' => Location::inRandomOrder()->first()->id
        ];
    }
}
