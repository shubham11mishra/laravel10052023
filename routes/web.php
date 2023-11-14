<?php

use App\Http\Controllers\ProfileController;
use App\Services\SomeService;
use App\Services\SomeServiceFacade;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    //        app(SomeService::class)->someMethod();
    //    $someServices = new SomeService(123);
    //    $someServices->someMethod();
    // \App\Services\SomeServiceFacade::someMethod();
    // SomeService::someMethod();
    SomeServiceFacade::someMethod();
    //    SomeService::someMethod();
    //    dump(phpinfo());
    //    dump(config('services'));
    //    dd(\Illuminate\Support\Facades\Config::get('services'));
    return view('theme');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


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
// Route::get('/', function () {
//     return view('theme');
// })
//     ->name('post.index');
// Route::get('/', [\App\Http\Controllers\PostController::class, 'index'])
//     ->name('post.index');
Route::get('/p/{post}', [\App\Http\Controllers\PostController::class, 'show'])
    ->name('post.show');

Route::get('/test', function () {
    $users = DB::table('users')->select('email', 'name')->get();
    $post = DB::table('posts')->paginate();
    foreach ($post as $p) {
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


Route::get('/image', function () {
    return view('image');
})->name('image.view');

Route::post('/image/upload', function (Request $request) {
    $file = $request->file('image');
    dump($file);
    dump($request);
})->name('image.upload');

require __DIR__ . '/auth.php';
