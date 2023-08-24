@extends('layouts.admin.master')
@section('title','All Departmens')
@section("bread-crumb")
<div class="page-breadcrumb">
          <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
              <h4 class="page-title">Departments </h4>
              <div class="ms-auto text-end">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">
                    <a href="#">Add New</a></li>
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
                  <h5 class="card-title">All Departments</h5>
                  <div class="table-responsive">
                    <table
                      id="zero_config"
                      class="table table-striped table-bordered"
                    >
                      <thead>
                        <tr>
                            {{-- <th>id</th> --}}
                            <th>Dno</th>
                            <th>Dnumber</th>

                        </tr>
                    </thead>
                        <tbody>
                            @forelse ($data as $value)
                            <tr>
                                {{-- <td>{{ $loop->iteration }}</td> --}}
                                <td>{{ $value['dno'] }}</td>
                                <td>{{ $value['dname']}}</td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="2" align="center">No Data</td>
                            </tr>
                            @endforelse



                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
@endsection
