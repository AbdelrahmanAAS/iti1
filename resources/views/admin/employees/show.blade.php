@extends('layouts.admin.master')
@section('title','Create Employee')
@section("bread-crumb")
<div class="page-breadcrumb">
    <div class="row">
      <div class="col-12 d-flex no-block align-items-center">
        <h4 class="page-title">Show Employee</h4>
        <div class="ms-auto text-end">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{ route('employees.index') }}">All Employees</a></li>
              <li class="breadcrumb-item active" aria-current="page">
              <a href="{{ route('employees.create') }}">Add New</a></li>
              </li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </div>
@endsection
@section("content")
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table
                        id="zero_config"
                        class="table table-striped table-bordered"
                        >
                            <tr>
                                <th>SSN</th>
                                <td>{{ $data->SSN }}</td>
                            </tr>
                            <tr>
                                <th>Fname</th>
                                <td>{{ $data->Fname }}</td>
                            </tr>
                            <tr>
                                <th>Lname</th>
                                <td>{{ $data->Lname }}</td>
                            </tr>
                            <tr>
                                <th>Email</th>
                                <td>{{ $data->email}}</td>
                            </tr>
                            <tr>
                                <th>Gender</th>
                                <td>{{ $data->gender}}</td>
                            </tr>
                            <tr>
                                <th>dno</th>
                                <td>{{ $data->department->dname}}</td>
                            </tr>


                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
