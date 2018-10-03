
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
        <h4>Add Room</h4>
      </li>
    </ol>
    <form role="form" method="post" action="{{ route('room.store') }}" data-parsley-validate>
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
              <label for="block">Block</label>
              <select name="block" id="block" class="form-control">
                <option value="">Select Block</option>
                <option value="A">A</option>
                <option value="B">B</option>
              </select>
            </div>
            <div class="form-group">
              <label for="room_no">Room Number</label>
              <input class="form-control" type="text" name="room_no" id="room_no" placeholder="Room Number ">
            </div>
            <div class="form-group">
              <label for="floor">Floor</label>
              <input class="form-control" type="text" name="floor" id="floor" placeholder=" Floor ">
          </div>
        <div class="box-footer">
          <button type="submit" class="btn btn-success">Submit</button>
          <a href="{{ route('room.index') }}" type="button" class="btn btn-warning" >Back</a>
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
