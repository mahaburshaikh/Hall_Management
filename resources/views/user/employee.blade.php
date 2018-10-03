@extends('user.app')

@section('main-content')

<div class="container">
  <div class="row table_row">
    <h2 >Employees</h2>
      </div>
   <div class="row">
    
    @foreach($employees as $employee)
    <div class="col-md-3">
    <div class="provost">
      <a href="{{ route('employee_details',$employee->id) }}"><img src="{{ asset('images/provost/'.$employee->image) }}"  alt="" class="employee_pic" ></a>
      <div style="text-align: center;margin-top: 5px"><strong>{{ $employee->name }}</strong></div>
    </div>
    </div>
    @endforeach

  
  </div>
</div>


@endsection