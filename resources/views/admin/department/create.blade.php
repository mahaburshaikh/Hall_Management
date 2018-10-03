
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
        <h4>Add Departments</h4>
      </li>
    </ol>
    <form role="form" method="post" action="{{ route('department.store') }}" data-parsley-validate>
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
          <div class="col-md-3">
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="name">Name</label>
              <input class="form-control" type="text" name="name" id="name" placeholder=" Name ">
          </div>
          <div class="form-group">
              <label for="short_name">Short Name</label>
              <input class="form-control" type="text" name="short_name" id="short_name" placeholder=" Short Name ">
          </div>
        <div class="box-footer">
          <button type="submit" class="btn btn-success">Submit</button>
          <a href="{{ route('department.index') }}" type="button" class="btn btn-warning" >Back</a>
        </div>
      </div>
      </div>
    </div>

    </form>

  </div>
</div>
@endsection

