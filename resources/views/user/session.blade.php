@extends('user.app')

@section('main-content')

<div class="container">
	<h3 class="mt-5 text-center">All Sessions</h3>
	<hr>
	<div class="row ">

		@foreach($sessions as $session)
		<div class="col-md-3">
      
     <a class=" session btn " style="color: #fff" href="{{ route('session_student',$session->session) }}">  
      {{ $session->session }}      
    </a>
    
  </div>
  @endforeach
</div>
</div>


@endsection



{{-- @include('user/layouts/footer') --}}