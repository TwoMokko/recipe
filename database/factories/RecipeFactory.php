<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\=Recipe>
 */
class RecipeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title'             => $this->faker->word,
            'description'       => $this->faker->sentence,
            'image'             => $this->faker->imageUrl,
            'cooking_time'      => $this->faker->time,
            'category_id'       => Category::get()->random()->id,
        ];
    }
}
