<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{

    public function login()
    {
        return view('auth.login');
    }

    public function auth_login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
 
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
 
            return redirect()->route('home.page');
        }
 
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }


    public function register()
    {
        return view('auth.register');
    }

    public function registration(Request $request)
    {
        $register = $request->validate([
            'name'=>'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        $register['password'] = Hash::make($register['password']);

        $register['role_id'] = 2;
       $user = User::create($register);
       
       auth()->login($user);

        return redirect()->route('home.page');
    }


    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();
     
        $request->session()->invalidate();
     
        $request->session()->regenerateToken();
     
        return redirect()->back();
    }    
}

