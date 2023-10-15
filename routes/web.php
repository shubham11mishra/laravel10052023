<?php

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;

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
