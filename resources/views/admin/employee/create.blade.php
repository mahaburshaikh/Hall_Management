
@extends('admin.layouts.app')
@section('main-content')
<div class="content-wrapper">
  <div class="container-fluid">
    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="{{ route('admin.home') }}">Dashboard</a>
      </li>
    </ol>

    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <h4>Add Employee</h4>
      </li>
    </ol>
    <form role="form" method="post" action="{{ route('employee.store') }}" enctype="multipart/form-data" data-parsley-validate>
      @if($errors->any())
<div class="alert alert-danger">
  <ul>
    @foreach($errors->all() as $errors)
    <p>{{$errors}}</p>
    @endforeach
  </ul>
</div>
@endif
      {{csrf_field()}}
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <div class="form-group">
              <label for="name">Name</label>
              <input class="form-control" type="text" name="name" id="name" placeholder="Name">
            </div>
            <div class="form-group">
              <label for="designation">Designation</label>
              <input class="form-control" type="text" name="designation" id="designation" placeholder="Designation">
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input class="form-control" type="text" name="email" id="email" placeholder="Email ">
            </div> 
            <div class="form-group">
              <label for="phone">Phone Number</label>
              <input class="form-control" type="text" name="phone" id="phone" placeholder="Phone Number ">
            </div>
           

          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="image">Image</label>
              <input class="form-control" type="file" name="image" id="image">
            </div>
             <div class="form-group">
              <label for="address">Address</label>
              <input class="form-control" type="text" name="address" id="address" placeholder="Address ">
            </div>
            <div class="box-footer">
          <button type="submit" class="btn btn-success">Submit</button>
          <a href="{{ route('employee.index') }}" type="button" class="btn btn-warning" >Back</a> 
        </div>
          </div>

        </div>
        
      </div>

    </form>

  </div>
</div>
@endsection
@section('footerSection')

