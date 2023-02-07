<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Blog>
 */
class BlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title'=>$this->faker->sentence(1),
            'author' => $this->faker->name(),
            'brief' => $this->faker->sentence(2),
            'body' => $this->faker->sentence(10),
            'status'=>$this->faker->boolean(),
            'portafolio_id'=>$this->faker->numberBetween(1, 10)
        ];
    }
}
