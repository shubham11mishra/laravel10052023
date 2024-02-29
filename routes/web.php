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
use App\Http\Controllers\ResumeController;
use App\Http\Controllers\LoginUserController;
use App\Http\Controllers\TaskListController;
use App\Http\Controllers\TodolistController;

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


Route::get('/resume', [ResumeController::class, 'index'])->name('resume');

Route::get('/resume_register', [ResumeController::class, 'create'])->name('resume.create');
Route::post('/resumesave', [ResumeController::class, 'store'])->name('resume.store');
Route::get('/resumes', [ResumeController::class, 'index'])->name('resume.index');
Route::get('/resume/{id}', [ResumeController::class, 'show'])->name('resume.show');
Route::get('/resume/{resume}/edit', [ResumeController::class, 'edit'])->name('resume.edit');
Route::patch('/resume/{resume}', [ResumeController::class, 'update'])->name('resume.update');
Route::delete('/resume/{resume}', [ResumeController::class, 'destroy'])->name('resume.destroy');

Route::get('/resume/{id}/download', [ResumeController::class, 'download'])->name('resume.download');

Route::get('/index', [LoginUserController::class, 'index'])->name('login.index');
Route::post('/loginuser', [LoginUserController::class, 'loginuser'])->name('login.user');
Route::get('/registeruser', [LoginUserController::class, 'create'])->name('register.user');
Route::post('/loginsave', [LoginUserController::class, 'store'])->name('login.save');
Route::get('/logindashboard', [LoginUserController::class, 'dashboard'])->name('loginuser.dashboard');
Route::get('/loginchangepassword', [LoginUserController::class, 'changepassword'])->name('user.changepassword');
Route::post('/confirmpassword', [LoginUserController::class, 'confirmpassword'])->name('confirm.password');
Route::get('/userlogout', [LoginUserController::class, 'destroy'])->name('user.logout');


Route::middleware('auth:loginUser')->group(function(){
    Route::get('/taskindex', [TaskListController::class, 'index' ])->name('task.index');
    Route::get('/create', [TaskListController::class, 'create' ])->name('task.create');
    Route::post('/save', [TaskListController::class, 'store' ])->name('task.save');
    Route::get('/task/{taskList}', [TaskListController::class, 'show' ])->name('task.show')->middleware('can:view-tasklist,taskList');
    Route::patch('/task/{taskList}', [TaskListController::class, 'update' ])->name('task.update');
    Route::delete('/task/{taskList}', [TaskListController::class, 'destroy' ])->name('task.destroy');
});




require __DIR__ . '/auth.php';


require __DIR__ . '/bharathi.php';
require __DIR__ . '/shubham.php';
