@extends('layouts.admin.master')
<div class="page-breadcrumb">
    <div class="row">
      <div class="col-12 d-flex no-block align-items-center">
        <h4 class="page-title">Doctors</h4>
        <div class="ms-auto text-end">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">
              <a href="#">update</a></li>
              </li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </div>

<div class="row">
    <div class="col-md-12">
        <div class="card">
          <form class="form-horizontal" action="{{ route('Doctor.edit') }}" enctype="multipart/form-data" method="post">
            @csrf
            < class="card-body">
            <div class="form-group row">
                <label
                  for="SSN"
                  class="col-sm-3 text-end control-label col-form-label"
                  >Did</label
                >
                <div class="col-sm-9">
                  <input
                    type="text"
                    class="form-control"
                    id="SSN"
                    placeholder="Id Here"
                    name="Did"
                    value="4"
                  />
                </div>
              </div>
              <div class="form-group row">
                <label
                  for="fname"
                  class="col-sm-3 text-end control-label col-form-label"
                  >Full name</label
                >
                <div class="col-sm-9">
                  <input
                    type="text"
                    class="form-control"
                    id="fname"
                    placeholder="First Name Here"
                    name="Fname"
                    value="Michail"
                  />
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
                  for="Department"
                  class="col-sm-3 text-end control-label col-form-label"
                  >Department</label
                >
                <div class="col-sm-9">
                  <input
                    type="text"
                    class="form-control"
                    id="dep"
                    name="deapartment"
                  />
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

