<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function dashboard(){
        return view('dashboard.dashboard');
    }
    
    public function login(){
        validator(request()->all(),[
            'email' =>['required','email'],
            'password'=> ['required'],
        ])->validate();

        if(auth()->attempt(request()->only(['email','password'])))
        {
            return redirect('dashboard',[EmployeeController::class,'doc']);//
        }else{ 
            return redirect()->back()->withErrors(['email'=>'Invaild','password'=>'invalid']);
        }
    }

    public function logout(){
        auth()->logout();
        return view('dashboard.dashboard');
    }
}
