
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
        <h4>Add Provost</h4>
      </li>
    </ol>
    <form role="form" method="post" action="{{ route('provost.store') }}" enctype="multipart/form-data" data-parsley-validate>
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
              <label for="name"> Name</label>
              <input class="form-control" type="text" name="name" id="name" placeholder=" Name ">
            </div>
            <div class="form-group">
              <label for="designation">Designation</label>
              <input class="form-control" type="text" name="designation" id="designation" placeholder="Designation ">
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input class="form-control" type="text" name="email" id="email" placeholder="Email ">
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input class="form-control" type="text" name="password" id="password" placeholder="Password ">
            </div>
            <div class="form-group">
              <label for="phone">Phone Number</label>
              <input class="form-control" type="text" name="phone" id="phone" placeholder="Phone Number ">
            </div>

          </div>
          <div class="col-lg-6">
            <div class="form-group">
              <label for="address">Address</label>
              <input class="form-control" type="text" name="address" id="address" placeholder="Address ">
            </div>
            <div class="form-group">
              <label for="faculty_id">Faculty </label>
              <select name="faculty_id" id="faculty_id" class="form-control">
                <option value="">Select Faculty</option>
                @foreach($faculties as $faculty)
                <option value="{{ $faculty->id }}">{{ $faculty->name }}</option>
                @endforeach
              </select>
            </div>
            <div class="form-group" >
              <label for="department_id">Departments </label>
              <select name="department_id" id="department_id" class="form-control select2">
                <option value="">Select Department</option>
                @foreach($departments as $department)
                <option value="{{ $department->id }}">{{ $department->short_name }}</option>
                @endforeach
              </select>
            </div>
            <div class="form-group">
              <label for="image">Image</label>
              <input class="form-control" type="file" name="image" id="image">
            </div>
            <div class="box-footer" >
              <button type="submit" class="btn btn-success">Submit</button>
              <a href="{{ route('provost.index') }}" type="button" class="btn btn-warning" >Back</a>
            </div>

          </div>

        </div>

      </div>

    </form>

  </div>
</div>
@endsection
@section('footerSection')
<script>
 $(document).ready(function(){
   $('.select2').select2();
   $('.select2-room').select2();
 });
</script>
@endsection
