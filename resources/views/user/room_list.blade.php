@extends('user.app')

@section('main-content')

<div class="container">
	<h3 class="mt-5 text-center">All Rooms</h3>
	<hr>
	<div class="row ">

		@foreach($roomlist as $list)
		<div class="col-md-2">

			<a class=" session btn btn-danger" style="color: #fff" href="{{ route('room_details',$list->id) }}">  
				{{ $list->room_no }}      
			</a>

		</div>
		@endforeach 
	</div>
</div>


@endsection



{{-- @include('user/layouts/footer') --}}