<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Comment;
use App\Models\Post;
use App\Models\todo;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
//        $this->call(UserSeeder::class);
//        $this->call(PostSeeder::class);
////        $this->call(CommentSeeder::class);
///
//        User::factory(3)
//            ->has(Post::factory(2), 'posts')
//            ->create();
//        Post::factory(10)
//            ->has(Comment::factory(3), 'comments')
//            ->create();


//        User::factory(10)
//            ->has(todo::factory(5), 'todos')
//            ->create();
////        todo::factory()->create();
///
        User::factory()->create();
        Post::factory()->count(5)->create();
    }
}
