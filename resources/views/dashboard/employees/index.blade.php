{{$all_d}}
@extends('layouts.admin.master')
@section('title','All Employees')
@section('css')
<link
      href="{{ URL::asset('assets/css/dataTables.bootstrap4.css') }}"
      rel="stylesheet"
    />
@endsection
@section("bread-crumb")
<div class="page-breadcrumb">
          <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
              <h4 class="page-title">Employees</h4>
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
          <!-- Start Page Content -->
          <div class="row">
            <div class="col-12">
                @if (Session::has('msg'))
                    <div class="alert alert-success">{{ Session::get('msg') }}</div>
                @endif
            <div class="card">
                <div class="card-body">
                  <h5 class="card-title">All Employees</h5>
                  <div class="table-responsive">
                  <table
                      id="zero_config"
                      class="table table-striped table-bordered"
                    >
                      <thead>
                        <tr>
                            {{-- <th>id</th> --}}
                            <th>SSN</th>
                            <th>Fullname</th>
                            <th>Department</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                        <tbody>
                            @forelse ($all_d as $value)
                            <tr>
                                {{-- <td>{{ $loop->iteration }}</td> --}}
                                <td>{{ $value['DID'] }}</td>
                                <td>{{ $value['Fname']}}</td>
                                
                                <td>
                                    <a href="{{ route('dashboard.employees.edit',$value['Did']) }}" class="btn btn-success">edit</a>
                                    <form action="{{ route('dashboard.employees.destroy',$value['Did']) }}" method="post" style="display: inline-block">
                                        @csrf
                                        @method('DELETE')
                                        <input type="submit" value="delete" class="btn btn-danger" >
                                    </form>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="4" align="center">No Data</td>
                            </tr>
                            @endforelse
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- End Page Content -->

    @endsection
    @section('js')
    <script src="{{ URL::asset('assets/js/datatables.min.js') }}"></script>
    <script>
      /****************************************
       *       Basic Table                   *
       ****************************************/
      $("#zero_config").DataTable();
    </script>
    @endsection
