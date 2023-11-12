<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Movies>
 */
class MoviesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title'=> $this->faker->word(),
            'photo'=> $this->faker->imageUrl(),
            'description'=> $this->faker->sentence(mt_rand(2,3)),
            'rating'=> $this->faker->randomDigit(),
        ];
    }
}
