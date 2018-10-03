
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
        <h4>Edit Session</h4>
      </li>
    </ol>
    <form role="form" method="post" action="{{ route('session.update',$session->id) }}" data-parsley-validate>
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
              <label for="session">Session</label>
              <input class="form-control" type="text" name="session" id="session" placeholder=" Session " value="{{ $session->session }}">
          </div>
        <div class="box-footer">
          <button type="submit" class="btn btn-success">Submit</button>
          <a href="{{ route('session.index') }}" type="button" class="btn btn-warning" >Back</a>
        </div>
      </div>
      </div>
    </div>

    </form>

  </div>
</div>
@endsection

