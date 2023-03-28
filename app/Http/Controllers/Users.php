<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Users extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    // public function index(){
    //     return view('test.hello');
    // }
    // public function window(){
    //     return view('test.good');
    // }
    public function dashboard(){
        return view('dashboard');
    }
}
