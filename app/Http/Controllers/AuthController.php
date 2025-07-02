<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
   public function showRegisterForm(Request $request)
    {
        return view('auth.register');
    }

    public function register(RegisterRequest $request)
    {

        $data = $request->validated();

        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => $data['password'],
        ]);

        Auth::login($user);

        return redirect(route('users.index'));
    }

    public function showLoginForm(Request $request)
    {
        return view('auth.login');
    }

    
    public function login(LoginRequest $request)
    {
        $data = $request->validated();

        if(Auth::attempt($data)){

            $request->session()->regenerate();

            return redirect(route('home'));
        }

        return redirect(route('show_login'))
        ->withErrors([
            'email'=>'Pogresni podaci za prijavu'
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect(route('show_login'));
    }

}