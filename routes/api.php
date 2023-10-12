<?php

use App\Http\Controllers\TodolistController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get('/post',[\App\Http\Controllers\PostController::class,'index'])->name('post.index');
Route::get('/post/{post}', [\App\Http\Controllers\PostController::class,'show'])->name('post.show');
Route::post('/post', [\App\Http\Controllers\PostController::class,'store'])->name('post.store');
//Route::post();
//Route::patch();
//Route::delete();

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});

