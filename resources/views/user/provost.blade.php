@extends('user.app')

@section('main-content')

<div class="container">
	<div class="row table_row">
    <h2 >Provosts</h2>
  </div>
   <div class="row">
    
    @foreach($provosts as $provost)
    <div class="col-md-3">
    <div class="provost">
      <a href="{{ route('provost_details',$provost->id) }}"><img src="{{ asset('images/provost/'.$provost->image) }}"  alt="" class="employee_pic" ></a>
      <div style="text-align: center;margin-top: 5px"><strong>{{ $provost->name }}</strong></div>
    </div>
    </div>
    @endforeach
  
  </div>
</div>


@endsection



{{-- @include('user/layouts/footer') --}}