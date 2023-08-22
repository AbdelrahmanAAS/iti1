<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Database;

class DatabaseController extends Controller
{
     public function index()
    {
        
            $database = new Database();
            $result = $database->RunDml("SELECT SSN, concat(Fname, ' ', Lname) as Fullname, sex, Dname FROM employee left join departments on employee.Dno = departments.Dno");
            
            // Process the $result as needed
            
            return view('employees.index');
        
    }
}
