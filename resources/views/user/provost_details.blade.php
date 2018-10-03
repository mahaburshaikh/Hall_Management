@extends('user.app')

@section('main-content')

<div class="container">

  <div class="row provost_again">
    
    @foreach($provost_again as $provost)
    <div class="col-md-3">
    <div class="provost">
     <img src="{{ asset('images/provost/'.$provost->image) }}"  alt="" class="employee_pic">
     <div style="text-align: center;margin-top: 5px"><strong>{{ $provost->name }}</strong></div>
    </div>
    </div>
    @endforeach
  
  </div>



	<div class="row table_provost_details">
		<h2 >{{ $provosts->name }} - details :</h2>
	</div>
	<div class="row">
		<div class=" prov_details">
			<div class="row">
			<div class="col-md-4" style="border-right: 3px solid #1b8a3d">
				<img class="provost_details_picture" src="{{ asset('images/provost/'.$provosts->image) }}" />
			</div>
			<div class="col-md-7">
				<ul style="margin-top: 18px">
					<li><strong style="color: #0b8827">Name : </strong>{{ $provosts->name }} </li>
					<li><strong style="color: #0b8827">Designation : </strong>{{ $provosts->designation }}</li>
					<li><strong style="color: #0b8827">Faculty : </strong>{{ $provost->faculty->short_name }}</li>
					<li><strong style="color: #0b8827">Email : </strong>{{ $provosts->email }}</li>
					<li><strong style="color: #0b8827">Phone : </strong>{{ $provosts->phone }}</li>
					<li><strong style="color: #0b8827">Address : </strong>{{ $provosts->address }}</li>
				</ul>
			</div>
		</div>
		</div>
	</div>
</div>
@endsection