<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Comment;
use App\Models\Post;
use App\Models\Tag;
use App\Models\todo;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;
use Illuminate\Support\Collection;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $users = 10;
        $post = 50;
        $comments = 50;
        $tags = 20;

        Tag::factory()->count($tags)->create();

        User::factory()->count($users)->create();

        $posts = Post::factory()->count($post)->state(new Sequence(
            fn(Sequence $sequence) => [
                'user_id' => rand(1, $users)
            ]
        ))->create();

        $posts->each(function ($post) use ($tags) {
            $randomTags = Collection::times(random_int(1, 5), function () use ($tags) {
                return random_int(1, $tags);
            });
            $randomTagsIds = $randomTags->all();
            $post->tags()->sync($randomTagsIds);
        });

        Comment::factory()->count($comments)->state(
            new Sequence(fn(Sequence $sequence) => [
                'user_id' => rand(1, $users),
                'post_id' => rand(1, $post),

            ])
        )->create();
    }
}
