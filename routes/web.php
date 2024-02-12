<?php

use App\Http\Controllers\CheatSheet\CheatSheetController;
use App\Http\Controllers\IdeasController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SLoginController;
use App\Http\Controllers\TagController;
use App\Http\Middleware\ifuseristen;
use App\Http\Middleware\SAuth;
use App\Services\SomeService;
use App\Services\SomeServiceFacade;
use Faker\Guesser\Name;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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


Route::get('/', [CheatSheetController::class ,'index']);

// Route::get('/', [\App\Http\Controllers\PostController::class, 'index'])
//     ->name('post.index');
// Route::get('/p/{post}', [\App\Http\Controllers\PostController::class, 'show'])
//     ->name('post.show');

// Route::post('/tag', [TagController::class, 'search'])->name('tag.search');

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

    return view('play');


    // dump($titles);

    // dd($result);
});




/* ---------    Image uploading ............*/
Route::controller(ImageController::class)->group(function () {
    Route::group(['as' => 'images.'], function () {
        Route::get('/index', 'index')->name('index');
        Route::get('/images/create',  'showForm')->name('create');
        Route::get('/images/{image}', 'show')->name('show');
        Route::get('/images/{image}/edit', 'edit')->name('edit');
        Route::put('/images/{image}', 'update')->name('update');
        Route::delete('/images/{image}', 'destroy')->name('destroy');
    });
    Route::post('/upload', 'upload')->name('upload.image');
});



/* ---------    Image uploading through ajax and javascript ............*/
Route::get('/ajaxindex', [ImageController::class, 'ajaxindex'])->name('images.ajaxindex');

Route::get('/getall', [ImageController::class, 'getall'])->name('images.getall');

Route::get('/upload-view', [ImageController::class, 'upload_view'])->name('ajaximages.upload-view');

Route::post('/upload-save', [ImageController::class, 'upload_save'])->name('ajaximages.upload-save');

// Route::get('/edit-image/{id}', [ImagesController::class, 'ajaxedit'])->name('edit-image');
// Route::post('/update-image/{id}', [ImagesController::class, 'ajaxupdate'])->name('update-image');
// Route::delete('/delete-image/{id}', [ImagesController::class, 'ajaxdestroy'])->name('delete-image');

// Route::get('')

// login  register and logout 




Route::group(['prefix' => 's', 'as' => 's.'], function () {

    Route::middleware(['guest'])->group(function () {
        Route::get('/login', [SLoginController::class, 'index'])->name('login');
        Route::post('/login', [SLoginController::class, 'login'])->name('loginrequest');
        Route::get('/register', [SLoginController::class, 'register'])->name('register');
        Route::post('/register', [SLoginController::class, 'registerrequest'])->name('registerrequest');
    });


    Route::middleware([SAuth::class])->group(function () {
        Route::get('/', [IdeasController::class, 'index'])->name('home');
        Route::post('/ideas/store', [IdeasController::class, 'store'])->name('ideas.store');
        Route::get('/logout', [SLoginController::class, 'logout'])->name('logout');
    });
});

require __DIR__ . '/auth.php';


require __DIR__ . '/bharathi.php';
require __DIR__ . '/shubham.php';
