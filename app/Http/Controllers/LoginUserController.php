<?php

namespace App\Http\Controllers;

use App\Models\LoginUser;
use App\Http\Requests\StoreLoginUserRequest;
use App\Http\Requests\UpdateLoginUserRequest;
use App\Models\PermissionLoginUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        if(Auth::guard('loginUser')->check() == true){
            return view('loginView.dashboard');
        }else{
            return view('loginView.login');
        }
       
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        if(Auth::guard('loginUser')->check() == true){
            return view('loginView.dashboard');
        }else{
            $permissions  = PermissionLoginUser::all();
            return view('loginView.register', compact('permissions'));
        }
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreLoginUserRequest $request)
    {
        //
        $loginUser = new LoginUser();
        $loginUser->name = $request->name;
        $loginUser->email = $request->email;
        $loginUser->password = bcrypt($request->password);
        $loginUser->save();   
        $permissions = $request->input('permissions', []);  
        $loginUser->permissions()->attach($permissions);
        if( Auth::guard('loginUser')->attempt(['email' => $request->email, 'password' => $request->password]) ){
            $request->session()->regenerate();
           return redirect()->route('loginuser.dashboard');
        }else{
           return redirect()->route('login.index');
        }

    }

    public function dashboard(){

        if(Auth::guard('loginUser')->check() == true){
            return view('loginView.dashboard');
        }else{
            return redirect()->route('login.index');
        }
    }


    public function loginuser(Request $request){

        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::guard('loginUser')->attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('logindashboard');
        }
 
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }


    public function changepassword(){
        return view('loginView.changepassword');
    }

    public function confirmpassword(Request $request){

        $this->validate($request, [
            'current_password' => 'required|string',
            'new_password' => 'required|confirmed|min:8|string'
        ]);

        $user = Auth::guard('loginUser')->user();
        if (!Hash::check($request->get('current_password'), $user->password)) 
        {
            
            return back()->withErrors('error', "Current Password is Invalid");
        }

        if (Hash::check($request->current_password, $user->password)) {
            $user->password = bcrypt($request->new_password);
            $user->save();
            return redirect()->route('loginuser.dashboard');
        }
    }

      
    public function loginlist(){
        $loginlist = LoginUser::all();
        return view('loginView.loginlist', compact('loginlist'));
    }
       
    /**
     * Display the specified resource.
     */
    public function show(LoginUser $loginUser)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(LoginUser $loginuser)
    {
        //

        // dd($loginuser->permissions());
        $permissions = PermissionLoginUser::all();
        // dd( $permissions);
        $userPermissions = $loginuser->permissions->pluck('id')->toArray();
        return view('loginView.edit', compact('loginuser', 'permissions','userPermissions'));
        // dd($loginuser);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateLoginUserRequest $request, LoginUser $loginuser)
    {
        //

        // dd($request);
          $loginuser->name = $request->name;
          $loginuser->email = $request->email;
          $loginuser->password = $request->password;
          $loginuser->save();
          $permissions = $request->input('permissions', []);
          $loginuser->permissions()->sync($permissions);
          return redirect()->route('loginuser.dashboard');
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy()
    {
        //
        Auth::guard('loginUser')->logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect()->route('login.index');
    }
}
