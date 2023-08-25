<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function dashboard(){
        return view('dashboard.index');
    }
    
    public function login(){
        return view('dashboard.login');
    }

    public function register(){
        return view('dashboard.register');
    }
}
