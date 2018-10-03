@extends('user.app')

@section('main-content')

<div class="container">

	<div class="row st_details">
   
    <div class="col-md-3">
          
    </div>

    <div class="col-md-6 mt-5">
      <div class=" text-center form-control"><img src="{{ asset('user/images/provost/mahabur.jpg') }}" alt="" class="img img-fluid img-thumbnail" style="height: 450px;width: 400px" /></div>

      <div class=" text-center form-control "><h3> {{ $students->first_name.' '.$students->last_name }} </h3> </div>

      <div class="text-center form-control">  {{ $students->student_id }}  </div>
      <div class="text-center form-control">  {{ $students->student_reg }} </div>
      <div class="text-center form-control">  {{ $students->faculty->short_name}}</div>
      <div class="text-center form-control">  {{ $students->session->session }}</div>  
      <div class="text-center form-control">  {{ $students->room->block.'-'.$students->room->room_no }} </div>
      <div class="text-center form-control">  {{ $students->border_no }}   </div>
      <div class="text-center form-control">  {{ $students->address }}     </div>
      <div class="text-center form-control">  {{ $students->mobile_no }}   </div>
      <div class="text-center form-control">  {{ $students->email }}       </div>
    </div>
    <div class="col-md-3">
          
    </div>
  </div>
</div>


@endsection



{{-- @include('user/layouts/footer') --}}