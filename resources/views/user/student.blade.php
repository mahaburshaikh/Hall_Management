@extends('user.app')

@section('main-content')

<div class="container">
	<div class="row table_row">
    <h2>Student List</h2>
    <table class="table" >
      <thead class="table_design">    
          <th class="text-center">#</th>
          <th class="text-center">Name</th>
          <th class="text-center">Faculty</th>
          <th class="text-center">Room</th>
          <th class="text-center">More</th>      
      </thead>

      <tbody> 
        @foreach($students as $student)
        <tr>
          <td class="text-center">{{ $loop->index+1 }}</td>
          <td class="text-center">{{ $student->first_name.' '.$student->last_name}}</td>

          <td class="text-center"><a href="{{ route('faculty_student',[$student->faculty->short_name,$student->faculty->id]) }}">{{ $student->faculty->short_name }}</a></td>

          <td class="text-center"><a href="{{ route('room_student',[$student->room->block,$student->room->room_no]) }}">{{ $student->room->block.'-'.$student->room->room_no }}</a></td>

          <td class="text-center"><a href=" " class="btn btn-outline-success" data-toggle="modal" data-target="#viewModal{{ $student->id }}"><i class="fa fa-eye"></i></a>

                  <div class="modal fade bd-example-modal-lg" id="viewModal{{ $student->id }}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5>{{ $student->first_name.' '.$student->last_name  }} Details</h5>
                          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                          </button>
                        </div>

                        <div class="modal-body">
                          <table class="table" style="border: none;">

                            <div>
                              <img class="provost_picture" src="{{ asset('images/student/'.$student->image) }}" />
                            </div>

                            <tr>
                              <td></td>
                              <td><b>Name</b></td>
                              <td>{{ $student->first_name.' '.$student->last_name }}</td>
                              <td></td>
                            </tr>
                            <tr>
                              <td></td>
                              <td><b>Faculty</b></td>
                              <td>{{ $student->faculty->short_name}}</td>
                              <td></td>
                            </tr>
                            <tr>
                              <td></td>
                              <td><b>Student Id</b></td>
                              <td>{{ $student->student_id }}</td>
                              <td></td>
                            </tr>
                            <tr>
                              <td></td>
                              <td><b>Student Reg</b></td>
                              <td>{{ $student->student_reg }}</td>
                              <td></td>
                            </tr>
                            <tr>
                              <td></td>
                              <td><b>Border Number</b></td>
                              <td>{{ $student->border_no }}</td>
                              <td></td>
                            </tr>
                              <tr>
                              <td></td>
                              <td><b>Session</b></td>
                              <td>{{ $student->session->session }}</td>
                              <td></td>
                            </tr>
                            <tr>
                              <td></td>
                              <td><b>Room</b></td>
                              <td>{{ $student->room->block.'-'.$student->room->room_no }}</td>
                              <td></td>
                            </tr>
                            <tr>
                              <td></td>
                              <td><b>Email</b></td>
                              <td>{{ $student->email }}</td>
                              <td></td>
                            </tr>
                            <tr>
                              <td></td>
                              <td><b>Address</b></td>
                              <td>{{ $student->address }}</td>
                              <td></td>
                            </tr>                          
                            <tr>
                              <td></td>
                              <td><b>Phone Number</b></td>
                              <td>{{ $student->mobile_no }}</td>
                              <td></td>
                            </tr>
                          
                          </table>
                        </div>

                        <div class="modal-footer">
                          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        </div>
                      </div>
                    </div>
                  </div>

                </td>
        </tr>
         @endforeach
      </tbody>
    </table>
        {{ $students->links() }}
  </div>
</div>


@endsection



{{-- @include('user/layouts/footer') --}}