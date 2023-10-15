<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\ReviewsTranslation>
 */
class ReviewsTranslationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'review_id' => $this->faker->numberBetween(1, 10),
            'description' => $this->faker->sentences(asText: true),
            'summary' => $this->faker->sentence(10),
            'locale_id' => $this->faker->numberBetween(1, 2)
        ];
    }
}
