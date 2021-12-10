<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use HasFactory;

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
            'title' => $this->faker->text(50),
            'body' => $this->faker->text(300)
        ];
    }
}
