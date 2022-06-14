<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->title(),
            'text' => $this->faker->text(),
            'like_count' => 10,
            'view_count' => 11,
            'category_id' => 1,
            'author_id' => 1,
        ];
    }
}
