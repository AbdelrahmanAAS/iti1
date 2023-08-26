<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function find()
    {
        return view('dashboard',['user'=>auth()->user()]);
    }
}
