<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Route::get('/', function () {
//    $title = fake()->sentence();
//    dump([
//        'title' => $title,
//        'meta_title' => $title,
//        'slug' => Str::slug($title,'-'),
//        'summery' => fake()->paragraph(3),
//        'published' => true,
//        'content' => fake()->paragraph(20),
//        'published_at' => fake()->dateTimeThisCentury,
//        'user_id' => 1
//    ]);
//    return [1];
//});


Route::get('/',[\App\Http\Controllers\PostController::class,'index'])->name('post.index');
Route::get('/{post}',[\App\Http\Controllers\PostController::class,'show'])->name('post.show');
