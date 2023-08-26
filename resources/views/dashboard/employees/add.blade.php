@extends('layouts.admin.master')
@section('title','Create Employee')
@section("bread-crumb")
<div class="page-breadcrumb">
    <div class="row">
      <div class="col-12 d-flex no-block align-items-center">
        <h4 class="page-title">Students</h4>
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
    <div class="col-md-12">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error )
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        @if (Session::has('msg'))
        <div class="alert alert-success">{{ Session::get('msg') }}</div>
        @endif
        <div class="card">
          <form class="form-horizontal" action="{{ route('employees.store') }}" enctype="multipart/form-data" method="post">
            @csrf
            <div class="card-body">
            <div class="form-group row">
                <label
                  for="SSN"
                  class="col-sm-3 text-end control-label col-form-label"
                  >SSN</label
                >
                <div class="col-sm-9">
                  <input
                    type="text"
                    class="form-control @error('SSN') is-invalid @enderror"
                    id="SSN"
                    placeholder="SSN Here"
                    name="SSN"
                  />
                  @error('SSN')
                      <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                </div>
              </div>
              <div class="form-group row">
                <label
                  for="fname"
                  class="col-sm-3 text-end control-label col-form-label"
                  >Fname</label
                >
                <div class="col-sm-9">
                  <input
                    type="text"
                    class="form-control @error('Fname') is-invalid @enderror"
                    id="fname"
                    placeholder="First Name Here"
                    name="Fname"
                  />
                  @error('Fname')
                      <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                </div>
              </div>
              <div class="form-group row">
                <label
                  for="Lname"
                  class="col-sm-3 text-end control-label col-form-label"
                  >Lname</label
                >
                <div class="col-sm-9">
                  <input
                    type="text"
                    class="form-control @error('Lname') is-invalid @enderror"
                    id="Lname"
                    placeholder="Second Name Here"
                    name="Lname"
                  />
                  @error('Lname')
                      <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                </div>
              </div>
              <div class="form-group row">
                <label
                  for="Email"
                  class="col-sm-3 text-end control-label col-form-label"
                  >Email</label
                >
                <div class="col-sm-9">
                  <input
                    type="email"
                    class="form-control @error('Email') is-invalid @enderror"
                    id="Email"
                    placeholder="Email Here"
                    name="Email"
                  />
                  @error('Email')
                      <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                </div>
              </div>
              <div class="form-group row">
                <label
                  for="image"
                  class="col-sm-3 text-end control-label col-form-label"
                  >Image</label
                >
                <div class="col-sm-9">
                  <input
                    type="file"
                    class="form-control"
                    id="image"
                    name="image"
                  />
                </div>
              </div>
              <div class="form-group row">
                <label
                  for="Gender"
                  class="col-sm-3 text-end control-label col-form-label"
                  >Gender</label
                >
                <div class="col-sm-9">
                  <div class="form-check">
                  <input
                    type="radio"
                    class="form-check-input @error('Gender') is-invalid @enderror"
                    id="customControlValidation1"
                    name="Gender"
                    value="M"
                  />
                  <label
                  for="customControlValidation1"
                  class="form-check-label mb-0"
                  >Male</label
                  >
                </div>
                  <div class="col-sm-9">
                    <div class="form-check">
                    <input
                      type="radio"
                      class="form-check-input"
                      id="customControlValidation2"
                      name="Gender"
                      value="F"
                    />
                    <label
                    for="customControlValidation2"
                    class="form-check-label mb-0"
                    >Female</label
                    >
                  </div>
                </div>
                @error('Gender')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
              </div>
              </div>
              <!-- <div class="form-group row">
                <label
                  for="Superssn"
                  class="col-sm-3 text-end control-label col-form-label"
                  >Superssn</label
                >
                <div class="col-sm-9">
                  <input
                    type="txt"
                    class="form-control"
                    id="Superssn"
                    placeholder="Superssn Here"
                    name="Superssn"
                  />
                </div>
              </div> -->
              <div class="form-group row">
                <label
                  for="Department"
                  class="col-sm-3 text-end control-label col-form-label"
                  >Department</label
                >
                <div class="col-sm-9">
                  <select class="form-control" name="Dno">
                    @foreach ($deptData as $dept)
                    <option value="{{ $dept['dno'] }}">{{ $dept['dname'] }}</option>

                    @endforeach
                  </select>
                </div>
              </div>
            </div>
            <div class="border-top">
              <div class="card-body">
                <button type="submit" class="btn btn-primary">
                  Add
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
  </div>


@endsection
