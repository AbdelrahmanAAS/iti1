<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    public function index()
    {
        $employee = new Employee();
        $data = $employee->index();
        
        return view('employees.index', compact('data'));
    }

    public function store(Request $request)
    {
        $employee = new Employee();
        $employee->set_ssn($request->input('ssn'));
        $employee->set_fname($request->input('fname'));
        $employee->set_lname($request->input('lname'));
        $employee->set_gender($request->input('gender'));
        $employee->set_dno($request->input('dno'));

        if ($employee->store()) {
            return redirect()->back()->with('success', 'Employee stored successfully.');
        } else {
            return redirect()->back()->with('error', 'Failed to store employee.');
        }
    }
}
