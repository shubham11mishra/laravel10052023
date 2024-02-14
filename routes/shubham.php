<?php

use App\Http\Controllers\APIController;
use App\Models\permissions_c;
use App\Models\roles_c;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'app', 'as' => 'api.'], function () {
    Route::get('/api', [APIController::class, 'index'])->name('index');
})->middleware('auth');

Route::get('/playground', function () {
    $user = User::first();

    // create roles
    // roles_c::create(['name' => 'admin','slug' => 'admin']);
    // roles_c::create(['name' => 'user', 'slug' => 'user']);
    // dump('roles', roles_c::all()->toArray());
    $admin = roles_c::where('slug', 'admin')->first();

    // create permissions
    // permissions_c::create(['name' => 'create-post', 'slug' => 'create-post']);
    // permissions_c::create(['name' => 'delete-post', 'slug' => 'delete-post']);
    // permissions_c::create(['name' => 'update-post', 'slug' => 'update-post']);
    // dump('permissions', permissions_c::all()->toArray());
    $createPost = permissions_c::where('slug', 'create-post')->first();
    $deletePost = permissions_c::where('slug', 'delete-post')->first();
    $updatePost = permissions_c::where('slug', 'update-post')->first();
    // dump($createPost->roles()->get()->toArray());

    // $user->assignRole($admin);
    // $user->removeRole($admin);
    // $admin->removePermissionTo($createPost);
    // $admin->removePermissionTo($updatePost);
    // $admin->removePermissionTo($deletePost);

    $admin->givePermissionTo($createPost);
    $admin->givePermissionTo($deletePost);
    $admin->givePermissionTo($updatePost);

    // $admin->givePermissionTo($deletePost);
    // // $admin->givePermissionTo($deletePost);
    // $admin->givePermissionTo($updatePost);

    // $admin->removePermissionTo($deletePost);




    dump('createPost',$user->hasPermission($createPost));
    dump('updatePost', $user->hasPermission($updatePost));
    dump('deletePost',$user->hasPermission($deletePost));
    // dump($user->hasRole('admin'));  

    dump('User all roles',User::first()->roles()->get()->toArray());
    dump('User all permissions', User::first()->permissions()->get()->toArray());

    dump('permission attacthed to roles',roles_c::first()->permissions->toArray());


  
});
