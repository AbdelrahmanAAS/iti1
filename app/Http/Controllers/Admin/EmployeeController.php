<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\EmployeeRequest;
use App\Models\Department;
use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=Employee::select('SSN','fname','lname','dno')->get();
        return view('admin.employees.index',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $deptData=Department::select('dno','dname')->get();
        return view('admin.employees.create',['deptData'=>$deptData]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EmployeeRequest $request)
    {
        //return $request->file('image') // tempname
        //->getClientOriginalName() // name.pnh
        //->getClientOriginalExtension() //png
        if($request->file('image')){
            $image_name= $request->file('image')->getClientOriginalName();
            $request->file('image')->storeAS('employees',$image_name,'upload');
            $image_name=$request->SSN." ".$image_name;
        }else{
            $image_name=null;
        }
        Employee::create([
            'SSN'=>$request->SSN,
            'Fname'=>$request->Fname,
            'Lname'=>$request->Lname,
            'gender'=>$request->Gender,
            'Email'=>$request->Email,
            'image'=>$image_name,
            'dno'=>$request->Dno
        ]);
        return redirect()->back()->with('msg','Added...');
        // return redirect()->route('employees.index')->with('msg','Added...');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data=Employee::findOrFail($id);  //primary key
        // $data=Employee::where('SSN',$id)->first();  //as choice

        return view('admin.employees.show',['data'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $deptData=Department::select('dno','dname')->get();
        $data=Employee::findOrFail($id);
        return view('admin.employees.edit',['deptData'=>$deptData,'data'=>$data]);
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
