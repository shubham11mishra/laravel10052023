<?php

use Illuminate\Support\Str;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Models\Post;


Route::get('/play', function () {
//    return fake()->sentence(2);
    $randomValues = Collection::times(random_int(3, 5), function () {
        return random_int(1, 100);
    });

// Convert the collection to an array
    $randomValuesArray = $randomValues->all();

// Print the array of random values
    dump($randomValuesArray);
});

Route::get('/', [\App\Http\Controllers\PostController::class, 'index'])
    ->name('post.index');
Route::get('/p/{post}', [\App\Http\Controllers\PostController::class, 'show'])
    ->name('post.show');

Route::get('/test',function(){
    $users = DB::table('users')->select('email','name')->get();
    $post = DB::table('posts')->paginate();
    foreach($post as $p){
        $p = Post::find($p->id);
        $p->title = 'b';
        $p->update();


    }
    dump(DB::table('posts')->get());

    // $posts =     Post::paginate();
    // foreach($posts as $p){
    //     dump($p->update([
    //         'title' => 'a'
    //     ]));
    // }
    return 'aaa';
});
