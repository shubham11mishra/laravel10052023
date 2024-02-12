<?php

use App\Http\Controllers\APIController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'app', 'as' => 'api.'],function(){
    Route::get('/api',[APIController::class,'index'])->name('index');
})->middleware('auth');
