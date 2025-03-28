<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //

    public function index()
    {
        return view('login');
    }

    public function register()
    {
        return view('register');
    }

    public function login(){

        request()->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $credentials = request(['email', 'password']);


        if(Auth::attempt($credentials)){
            return redirect()->intended('/')->with('success', 'Login successful');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    public function logout()
    {
        Auth::logout();
        session()->flush();
        session()->regenerate();
        // Redirect to the login page
        return redirect()->route('login');
    }

    public function create()
    {
        request()->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6|confirmed'
        ]);

        $user = new User();
        $user->name = request('name');
        $user->email = request('email');
        $user->password = bcrypt(request('password'));
        $user->save();

        return redirect()->route('login')->with('success', 'Registration successful. Please login.');
    }
}
