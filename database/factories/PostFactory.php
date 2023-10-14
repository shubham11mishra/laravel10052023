<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{

    protected $model = Post::class;

    public function definition(): array
    {
        $title = fake()->sentence(5);

        return [
            'title' => $title,
            'meta_title' => $title,
            'slug' => Str::slug($title,'-'),
            'summary' => fake()->paragraph(3),
            'published' => true,
            'content' => fake()->paragraph(20),
            'published_at' => fake()->dateTimeThisCentury,
            'user_id' => 1
        ];
    }
}
