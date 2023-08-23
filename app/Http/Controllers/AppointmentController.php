<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;

class AppointmentController extends Controller
{

    public function index(){
        return view('appointment');
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'doctor_type' => 'required',
            'time' => 'required',
        ]);

        //Appointment::create($validatedData);

        return redirect()->back()->with('success', 'Appointment created successfully.');
    }

   
}   
