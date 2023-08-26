<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\Doctor;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index()
    {
        $data=Department::get();
        return view('departments',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
   
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
        Department::create([
            'Dno'=>$request->SSN,
            'Depname'=>$request->Fname,
            'imgname'=>$image_name,
            'description'=>$request->Dno
        ]);
        return redirect()->back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
            $employee=Department::findOrFail($id);
            $employee->update([
                'Dno'=>$request->SSN,
                'depname'=>$request->Fname,
                'imgname'=>$request->imagename,
                'description'=>$request->description
            ]);
    
            return redirect()->route('department.index')->with('msg','Updated...');
        }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}