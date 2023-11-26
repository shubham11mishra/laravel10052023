<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Middleware\ifuseristen;
use App\Services\SomeService;
use App\Services\SomeServiceFacade;
use Faker\Guesser\Name;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
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





Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



Route::get('/p/{post}', [\App\Http\Controllers\PostController::class, 'show'])
    ->name('post.show');
Route::controller(PostController::class)->group(function () {
    Route::get('/new', 'create')->name('post.create');
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


Route::post('/tag', function (Request $request) {
    return  response()->json($request->toArray());
})->name('tag.search');

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

require __DIR__ . '/auth.php';
