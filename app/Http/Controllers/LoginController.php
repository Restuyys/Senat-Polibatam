<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Str;

class LoginController extends Controller
{
    public function login()
    {
        return view('login.login');
    }  //
    public function loginproses(Request $request)
    {
        if (Auth::attempt($request->only('email', 'password'))) {
            return redirect('/dashboard');
        }
        return redirect('/login');
    }
    public function register()
    {
        return view('register.register');
    }
    public function registeruser(Request $request)
    {
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'remember_token' => str::random(60),

        ]);
        return redirect('/login');
    }
    public function store(Request $request)
    {
        auth()->logout();
        return redirect()->route('login');
    }
}
