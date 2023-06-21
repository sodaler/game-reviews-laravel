<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => ucfirst($this->faker->words(2, true)),
            'content' => $this->faker->text(100),
            'category_id' => Category::query()->inRandomOrder()->value('id'),
            'preview_image' => $this->faker->fixturesImage('posts', 'posts'),
            'main_image' => $this->faker->fixturesImage('posts', 'posts'),
            'short_description' => $this->faker->text(30),
            'quote' => ucfirst($this->faker->text(10)),
            'author' => $this->faker->name,
            'content_title' => ucfirst($this->faker->words(4, true)),
            'conclusion' => $this->faker->text(10),
            'user_id' => User::query()->inRandomOrder()->value('id'),
            'preview_url' => array_rand(['https://www.youtube.com/watch?v=c0i88t0Kacs', 'https://www.youtube.com/watch?v=-cSFPIwMEq4', 'https://www.youtube.com/watch?v=eaW0tYpxyp0']),
        ];
    }
}
