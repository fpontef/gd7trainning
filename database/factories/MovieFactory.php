<?php

namespace Database\Factories;

use App\Models\Movie;
use Illuminate\Database\Eloquent\Factories\Factory;

class MovieFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Movie::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word,
            'part' => $this->faker->word,
            'image_url' => $this->faker->imageUrl($width = 640, $height = 480, 'cats'),
            'year' => $this->faker->word,
            'stats' => $this->faker->name,
            'details' => $this->faker->word,
            'genre_id' => $this->faker->numberBetween($min = 0, $max = 3),
            'url' => $this->faker->imageUrl($width = 640, $height = 480, 'cats'),
        ];
    }
}
