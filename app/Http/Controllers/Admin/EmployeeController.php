<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\EmployeeRequest;
use App\Models\Department;
use App\Models\Employee;
use Illuminate\Http\Request;
use App\Models\Doctor;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function doc()
    {
        $data=Doctor::get();
        return view('/doctors',['doctors'=>$data]);
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        if($request->file('image')){
            $image_name= $request->file('image')->getClientOriginalName();
            $request->file('image')->storeAS('employees',$image_name,'upload');
            $image_name=$request->SSN." ".$image_name;
        }else{
            $image_name=null;
        }
        Employee::create([
            'Did'=>$request->SSN,
            'Fname'=>$request->Fname,
            'image'=>$image_name,
            'department'=>$request->Dno
        ]);
        return redirect()->back();
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $employee=Employee::findOrFail($request->Did);
        $employee->update([
            'Did'=>$request->Did,
            'Fname'=>$request->Fname,
            'Department'=>$request->dep,
            'description'=>$request->description
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request ,$id)
    {
        $employee=Employee::findOrFail($id);
        $employee->update([
            'SSN'=>$request->SSN,
            'Fname'=>$request->Fname,
            'Lname'=>$request->Lname,
            'gender'=>$request->Gender,
            'Email'=>$request->Email,
            'dno'=>$request->Dno
        ]);

        return redirect()->route('employees.index')->with('msg','Updated...');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $employee=Employee::findOrFail($id);
        $employee->delete();
        return redirect()->route('employees.index')->with('msg','Deleted...');
    }
    public function archive(){
        $data=Employee::onlyTrashed()->select('SSN','fname','lname','dno')->get();
        return view('admin.employees.archive',['data'=>$data]);
    }
    public function restore($id){
        Employee::withTrashed()->findOrFail($id)->restore();
        return redirect()->back();
    }
    public function deleteArchive($id){
        Employee::withTrashed()->findOrFail($id)->forceDelete();
        return redirect()->back();
    }
}