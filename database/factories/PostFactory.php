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
            'title' => $this->faker->sentence(random_int(2, 8)),
            'slug' => $this->faker->slug(),
            'excerpt' => $this->faker->paragraph(),
            'body' => collect($this->faker->paragraphs(random_int(5, 10)))
                ->map(fn ($p) => "<p>$p</p>")
                ->implode(''),
            'category_id' => random_int(1, 3),
            'user_id' => (1)
        ];
    }
}
