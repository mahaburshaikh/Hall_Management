
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
        <h4>Edit Faculties</h4>
      </li>
    </ol>
    <form role="form" method="post" action="{{ route('faculty.update',$faculty->id) }}" data-parsley-validate>
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
      {{ method_field('PUT') }}
      <div class="container">
        <div class="row">
          <div class="col-md-3">
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="name">Name</label>
              <input class="form-control" type="text" name="name" id="name" placeholder=" Name " value="{{ $faculty->name }}">
          </div>
          <div class="form-group">
              <label for="short_name">Short Name</label>
              <input class="form-control" type="text" name="short_name" id="short_name" placeholder=" Short Name " value="{{ $faculty->short_name }}">
          </div>
        <div class="box-footer">
          <button type="submit" class="btn btn-success">Submit</button>
          <a href="{{ route('faculty.index') }}" type="button" class="btn btn-warning" >Back</a>
        </div>
      </div>
      </div>
    </div>

    </form>

  </div>
</div>
@endsection

