<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\ReviewsGeneral>
 */
class ReviewsGeneralFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->firstName,
            'link' => $this->faker->url,
            'photo' => $this->faker->imageUrl(60, 60)
        ];
    }
}
