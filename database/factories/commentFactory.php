<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class commentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'fio' => $this->faker->title(),
            'text' => $this->faker->text(),
            'email' => $this->faker->unique()->safeEmail(),
        ];
    }
}
