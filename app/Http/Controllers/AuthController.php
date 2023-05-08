<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Auth;
use App\Models\User;

class AuthController extends Controller
{
    public function register (Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed',
        ]);

        $user = User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => $validatedData['password'],
        ]);

        Auth::login($user);

        return redirect('/home');
    }

    public function showLoginForm (Request $request)
    {
        return view('login');
    }

    public function login (Request $request)
    {
        $credentials = $request->only('email', 'password');

        if(Auth::attempt($credentials)){
            return redirect()->intended('/home');
        }

        return redirect('/login')->withErrors(['email' => 'Email atau Password Salah']);
    }
}
