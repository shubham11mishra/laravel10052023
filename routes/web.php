<?php

use App\Http\Controllers\ImageController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TagController;
use App\Http\Middleware\ifuseristen;
use App\Services\SomeService;
use App\Services\SomeServiceFacade;
use Faker\Guesser\Name;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

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




Route::get('/', [\App\Http\Controllers\PostController::class, 'index'])
    ->name('post.index');
Route::get('/p/{post}', [\App\Http\Controllers\PostController::class, 'show'])
    ->name('post.show');

Route::post('/tag', [TagController::class, 'search'])->name('tag.search');

// function (Request $request) {
//     return  response()->json($request->toArray());
// }

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::controller(PostController::class)->group(function () {
        Route::get('/new', 'create')->name('post.create');
        Route::post('/new', 'store')->name('post.store');
    });
});










Route::get('/image', function () {
    dump(asset('storage/bvK5oiyxD7YAlczfysXf6YkUqOkk43937faBRCqf.jpg'));
    dump(public_path());
    dump(storage_path('app/bvK5oiyxD7YAlczfysXf6YkUqOkk43937faBRCqf.jpg'));
    return view('image');
})->name('image.view');

Route::post('/image/upload', function (Request $request) {
    if ($request->hasFile('image')) {
        $file = $request->file('image');
        $a =  Storage::disk('local')->put('/', $file);
        dump($a);
    }

    return view('image', compact('a'));
})->name('image.upload');




Route::get('/play', function () {
    $titles = 
    DB::table('users')
    ->select(DB::raw('count(*) as user_count, status'))
    ->where('status', '<>', 1)
    ->groupBy('status')
    ->get();


    dump($titles);
    
    // dd($result);
});




/* ---------    Image uploading ............*/

Route::get('/upload', [ImageController::class, 'showForm']);
Route::post('/upload', [ImageController::class, 'upload'])->name('upload.image');

require __DIR__ . '/auth.php';
