<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    // public function dashboard()
    // {
    //     return view('dashboard');
    // }
    public function login()
    {
        return view('auth.login');
    }
    public function register()
    {
        return view('auth.register');
    }
    public function verify()
    {
        return view('auth.verify');
    }
}

