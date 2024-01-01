<?php

namespace App\Http\Controllers;

// use App\Models\USer;

use App\Http\Requests\registerRequest;
use App\Http\Requests\SLoginRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SLoginController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('sauth.login');
    }

    public function login(SLoginRequest $request)
    {
        $remember = $request->has('remember') ? true : false;
        Auth::attempt([
            'email' => $request->input('email'),
            'password' => $request->input('password')
        ], $remember);
        
        if (Auth::check()) {
           return redirect()->route('s.home');
        } else {
            return redirect()->back()->with('error', 'Invalid Credentials')->withInput();
        }
    }

    public function register()
    {
        return view('sauth.register');
    }

    public function registerrequest(registerRequest $request)
    {
        $user =  User::create([
            'name' => $request->input('username'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
        ]);
        Auth::login($user);
        return redirect()->route('s.home');
    }

    function logout()
    {
        Auth::logout();
        return redirect()->route('s.login');
    }
}
