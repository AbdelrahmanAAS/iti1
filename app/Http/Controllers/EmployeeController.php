<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;

class EmployeeController extends Controller
{
    public function show()
    {
        $all_d=Doctor::get();
        return view('dashboard.employees.index',['all_d'=>$all_d]);
    }

    public function store(Request $request)
    {
        $doctor = new Doctor();
        $doctor->set_Did($request->input('ID'));
        $doctor->set_Fname($request->input('Fullname'));
        $doctor->set_department($request->input('department'));
        if ($doctor->store()) {
            return redirect()->back()->with('success', 'doctor stored successfully.');
        } else {
            return redirect()->back()->with('error', 'Failed to store employee.');
        }
    }

}
