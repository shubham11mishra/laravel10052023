<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\TodolistController;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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



Route::get('/', function () {
    return response()->json(Auth::guard('api')->check());
});

// Route::get('/articles',function(){
//     return Article::all();
// });

// Route::get('/articles/{id}',function($id){
//     try {
//         return   Article::findorfail($id);
//     } catch (Exception $e) {
//         return response()->json([
//             'message' => $e->getMessage()
//         ], 404);
//     }

// });

// Route::post('/articles',function(Request $request){
//     return Article::create($request->all());
// });

// Route::put('/articles/{id}',function(Request $request,$id){
//     $article = Article::find($id);
//     $article->update($request->all());
//     return $article;
// });

// Route::delete('/articles/{id}',function($id){
//     $article = Article::find($id);
//     $article->delete();
//     return 204 ;
// });

Route::group(['prefix' => 'auth'], function () {

    Route::post('login', [AuthController::class, 'login']);
    Route::post('register', [AuthController::class, 'register']);

    Route::group(['middleware' => 'auth:sanctum'], function () {
        Route::get('logout', [AuthController::class, 'logout']);
        Route::get('user', [AuthController::class, 'user'])->name('api.user.detail');
    });
});

// Route::get('/articles', [ArticleController::class, 'index']);
// Route::post('/articles', [ArticleController::class, 'store']);
// Route::get('/articles/{id}', [ArticleController::class, 'show']);
// Route::put('/articles/{id}', [ArticleController::class, 'update']);
// Route::delete('/articles/{id}', [ArticleController::class, 'destroy']);
Route::group(['middleware' => 'auth:sanctum'], function () {
    Route::resource('articles', ArticleController::class)->except(['create', 'edit']);
    Route::resource('task', TaskController::class)->except(['create', 'edit']);
});

Route::get('/token', function (Request $request) {
    $token = $request->session()->token();
 
    // $token = csrf_token();
    return response()->json($token);
   
});