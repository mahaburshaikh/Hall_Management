@extends('user.app')

@section('main-content')

<div class="container">
	<h3 style="color: #136b36;border-bottom: 1px solid rgb(11, 76, 31);margin-bottom: 30px" class="mt-5 text-center">All Blocks</h3>
	<div class="row ">
		<div class="col-md-2">
			
		</div>
		@foreach($rooms as $room)
		<div class="col-md-3 block wow slideInRight">
      
     <a class=" room btn " style="color: #fff" href="{{ route('room_list',$room->block) }}">  
      <h2>{{ $room->block }}</h2>        
    </a>
    
  </div>
  @endforeach
  <div class="col-md-2">
			
		</div>
</div>
</div>


@endsection



{{-- @include('user/layouts/footer') --}}