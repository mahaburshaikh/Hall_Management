@extends('user.app')

@section('main-content')

<div class="container">

  <div class="row provost_again" >
    
    @foreach($employee_again as $employee) 
    <div class="col-md-3">
    <div class="provost">
     <img src="{{ asset('images/provost/'.$employee->image) }}"  alt="" class="employee_pic">
     <div style="text-align: center;margin-top: 5px"><strong>{{ $employee->name }}</strong></div>
    </div>
    </div>
    @endforeach 
  </div> 
  <hr style="border-bottom: 1px solid rgb(11, 76, 31);">
	<div class="row table_provost_details">
		<h2 >{{ $employees->name }} - details :</h2>
	</div>
	<div class="row">
		<div class=" prov_details">
			<div class="row">
			<div class="col-md-4" style="border-right: 3px solid #1b8a3d">
				<img class="provost_details_picture" src="{{ asset('images/provost/'.$employees->image) }}" />
			</div>
			<div class="col-md-7">
				<ul style="margin-top: 18px">
					<li><strong style="color: #0b8827">Name : </strong>{{ $employees->name }} </li>
					<li><strong style="color: #0b8827">Designation : </strong>{{ $employees->designation }}</li>
					<li><strong style="color: #0b8827">Faculty : </strong></li>
					<li><strong style="color: #0b8827">Email : </strong>{{ $employees->email }}</li>
					<li><strong style="color: #0b8827">Phone : </strong>{{ $employees->phone }}</li>
					<li><strong style="color: #0b8827">Address : </strong>{{ $employees->address }}</li>
				</ul>
			</div>
		</div>
		</div>
	</div>
</div>
@endsection