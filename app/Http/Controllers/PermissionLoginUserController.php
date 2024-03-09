<?php

namespace App\Http\Controllers;

use App\Models\PermissionLoginUser;
use App\Http\Requests\StorePermissionLoginUserRequest;
use App\Http\Requests\UpdatePermissionLoginUserRequest;
use Illuminate\Support\Str;

class PermissionLoginUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $permissionLoginUser = PermissionLoginUser::all();
        return view('permissionLoginUser.index', compact('permissionLoginUser'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('permissionLoginUser.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePermissionLoginUserRequest $request)
    {
        //
        $permissionLoginUser = new PermissionLoginUser();
        $permissionLoginUser->name = $request->name;
        $permissionLoginUser->slug = Str::slug( $request->name );
        $permissionLoginUser->save();
        return redirect()->route('permissions.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(PermissionLoginUser $permissionLoginUser)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PermissionLoginUser $permission)
    {
        //
        // dd($permission);
        
        return view('permissionLoginUser.edit', compact('permission'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePermissionLoginUserRequest $request, PermissionLoginUser $permission)
    {
        //
         $permission->name = $request->name;
         $permission->slug = Str::slug( $request->name );
         $permission->save();
         return redirect()->route('permissions.index');
    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PermissionLoginUser $permission)
    {
        //
        $permission->delete();
        return redirect()->route('permissions.index');
        
    }
}
