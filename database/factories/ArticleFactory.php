<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $totaluser = User::count();

        return [
            
                'title'=>fake()->words(5, true),
                'description'=>fake()->paragraph(1),
                'price'=>fake()->numberBetween(1, 1000),
                'category_id'=>fake()->numberBetween(1, 10),
                'user_id'=>fake()->numberBetween(1, $totaluser),
                'is_accepted'=>fake()->numberBetween(0,1)
        ];

    }
}
