
@extends('admin.layouts.app')


@section('main-content')

<div class="content-wrapper">
  <div class="container-fluid">
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="#">Dashboard</a>
      </li>
      <li class="breadcrumb-item active">Student</li>
    </ol>

    <div class="card mb-3">
      <div class="card-header">
        <i class="fa fa-table"></i> All Students
        <a class="col-lg-offset-5 btn btn-success float-right btn-sm" href="{{ route('student.create')}}">Add new </a>
      </div>
      <div class="box">

      </div>

      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>S.No</th>
                <th>Name</th>
                <th>Student ID</th>
                <th>Faculty</th>
                <th>Border No</th>
                <th>View</th>
                <th>Edit</th>
                <th>Delete</th>
              </tr>
            </thead>
            <tbody>
              @foreach($students as $student)
              <tr>
                <td>{{ $loop->index+1 }}</td>
                <td>{{ $student->first_name.' '.$student->last_name }}</td>
                <td>{{ $student->student_id }}</td>
                <td>{{ $student->faculty->short_name }}</td>
                <td>{{ $student->border_no }}</td>
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
                <td><a href="{{ route('student.edit',$student->id) }}" class="btn btn-outline-primary"><i class="fa fa-edit"></i></a></td>

                <td>
                  <a href="" class="btn btn-outline-danger" data-toggle="modal" data-target="#deleteModal{{ $student->id }}"><i class="fa fa-trash"></i></a>
                  <div class="modal fade" id="deleteModal{{ $student->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5>Delete Student</h5>
                          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          Are You Sure Want To Delete This ?
                        </div>
                        <div class="modal-footer">
                          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                          <form action="{{ route('student.destroy',$student->id) }}" method="POST">
                            {{ csrf_field() }}
                            {{method_field('DELETE')}}
                            <button type="submit" class="btn btn-danger">Delete</button>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </td>

              </tr>
              @endforeach
            </tbody>
            <tfoot>
              <tr>
               <th>S.No</th>
               <th>Name</th>
               <th>Student ID</th>
               <th>Faculty</th>
               <th>Border No</th>
               <th>View</th>
               <th>Edit</th>
               <th>Delete</th>
             </tr>
           </tfoot>
           <tbody>

           </tbody>
         </table>
       </div>
     </div>
   </div>
 </div>
</div>

@endsection

