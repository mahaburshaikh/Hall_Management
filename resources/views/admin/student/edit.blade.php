
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
        <h4>Edit Student</h4>
      </li>
    </ol>
    <form role="form" method="post" action="{{ route('student.update',$student->id) }}" enctype="multipart/form-data" data-parsley-validate>
      @if($errors->any())
<div class="alert alert-danger">
  <ul>
    @foreach($errors->all() as $errors)
    <p>{{$errors}}</p>
    @endforeach
  </ul>
</div>
@endif
      {{ csrf_field() }}
      {{ method_field('PUT') }}
      <div class="container">
        <div class="row">
          <div class="col-lg-6">

            <div class="form-group">
              <label for="first_name">First Name</label>
              <input class="form-control" type="text" name="first_name" id="first_name" placeholder="First Name" value="{{ $student->first_name }}">
            </div>
            <div class="form-group">
              <label for="last_name">Last Name</label>
              <input class="form-control" type="text" name="last_name" id="last_name" placeholder="Last Name" value="{{ $student->last_name }}">
            </div>
            <div class="form-group">
              <label for="student_id">Student Id</label>
              <input class="form-control" type="text" name="student_id" id="student_id" placeholder="Student Id" value="{{ $student->student_id }}">
            </div>
            <div class="form-group">
              <label for="student_reg">Student Reg</label>
              <input class="form-control" type="text" name="student_reg" id="student_reg" placeholder="Student Reg" value="{{ $student->student_reg }}">
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input class="form-control" type="text" name="email" id="email" placeholder="Email" value="{{ $student->email }}">
            </div>
            <div class="form-group">
              <label for="address">Address</label>
              <input class="form-control" type="text" name="address" id="address" placeholder="Address" value="{{ $student->address }}">
            </div>
          </div>
          <div class="col-lg-6">
            <div class="form-group">
              <label for="mobile_no">Phone Number</label>
              <input class="form-control" type="text" name="mobile_no" id="mobile_no" placeholder="Phone Number " value="{{ $student->mobile_no }}">
            </div>
            <div class="form-group">
              <label for="border_no">Border Number</label>
              <input class="form-control" type="text" name="border_no" id="border_no" placeholder="Border Number " value="{{ $student->border_no }}">
            </div>
            <div class="form-group">
              <label for="faculty_id">Faculty </label>
              <select name="faculty_id" id="faculty_id" class="form-control">
                <option value="">Select Faculty</option>
                @foreach($faculties as $faculty)
                <option value="{{ $faculty->id }}"
                    @if($student->faculty->id == $faculty->id)
                    selected 
                    @endif

                 >{{ $faculty->name }}</option>
                @endforeach
              </select>
            </div>
            <div class="form-group">
              <label for="session_id">Session </label>
              <select name="session_id" id="session_id" class="form-control select2">
                <option value="">Select Session</option>
                @foreach($sessions as $session)
                <option value="{{ $session->id }}" 
                    @if($student->session->id == $session->id)
                    selected 
                    @endif
                  >{{ $session->session }}</option>
                @endforeach
              </select>
            </div>
            <div class="form-group">
              <label for="room_id">Room </label>
              <select name="room_id" id="room_id" class="form-control select2-room">
                <option value="">Select Room</option>
                @foreach($rooms as $room)
                <option value="{{ $room->id }}" 
                    @if($student->room->id == $room->id)
                    selected 
                    @endif
                  >{{ $room->block.'-'.$room->room_no }}</option>
                @endforeach
              </select>
            </div>


          </div>

        </div>
        <div class="box-footer">
          <button type="submit" class="btn btn-success">Submit</button>
          <a href="{{ route('student.index') }}" type="button" class="btn btn-warning" >Back</a>
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
