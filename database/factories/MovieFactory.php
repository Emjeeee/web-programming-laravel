<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Movie>
 */
class MovieFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title'=> $this->faker->word,
            'photo'=> $this->faker->imageUrl,
            'description'=> $this->faker->paragraph,
            'rating'=> $this->faker->randomFloat(1, 0, 5),
        ];
    }
}
