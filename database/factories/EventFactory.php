<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->text(10),
            'start_date' => $this->faker->dateTimeBetween('now', '+1 week', 'Asia/Jakarta'),
            'end_date' => $this->faker->dateTimeBetween('+1 week', '+2 week', 'Asia/Jakarta'),
            'created_at' => $this->faker->dateTime('now', 'Asia/Jakarta'),
            'updated_at' => $this->faker->dateTime('now', 'Asia/Jakarta')
        ];
    }
}
