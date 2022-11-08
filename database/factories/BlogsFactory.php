<?php

namespace Database\Factories;
use App\Models\category;
use App\Models\blogs;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Blogs>
 */
class BlogsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence,
            'description' => $this->faker->realText($maxNbChars = 200),
            'image' => $this->faker->imageUrl($width = 640, $height = 480, 'dogs'),
            'author' => $this->faker->name,
            'tags' => $this->faker->text,
            'category_id' => category::pluck('id')->random(),
        ];
    }
}
