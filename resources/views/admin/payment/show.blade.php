
@extends('admin.layouts.app')


@section('main-content')

<div class="content-wrapper">
  <div class="container-fluid">
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="#">Dashboard</a>
      </li>
      <li class="breadcrumb-item active">Payments</li>
    </ol>

    <div class="card mb-3">
      <div class="card-header">
        <i class="fa fa-table"></i>All Payments
        <a class="col-lg-offset-5 btn btn-success float-right btn-sm" href="{{ route('payment.create')}}">Add new </a>
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
                <th>Border</th>
                <th>Duration</th>
                <th>Amount</th>
                <th>View</th>
                <th>Edit</th>
                <th>Delete</th>
              </tr>
            </thead>
            <tbody>
              @foreach($payments as $payment)
              <tr>
                <td>{{ $loop->index+1 }}</td>
                <td>{{ $payment->student_name }}</td>
                <td>{{ $payment->border_no }}</td>
                <td>{{ $payment->duration }}</td>
                <td>{{ $payment->amount }}</td>


                 <td class="text-center"><a href=" " class="btn btn-outline-success" data-toggle="modal" data-target="#viewModal{{ $payment->id }}"><i class="fa fa-eye"></i></a>

                  <div class="modal fade bd-example-modal-lg" id="viewModal{{ $payment->id }}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5>{{ $payment->id }} - No Details</h5>
                          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                          </button>
                        </div>

                        <div class="modal-body">
                          <table class="table" style="border: none;">
                            <tr>
                              <td></td>
                              <td><b>Name</b></td>
                              <td>{{ $payment->student_name }}</td>
                              <td></td>
                            </tr>                          
                            <tr>
                              <td></td>
                              <td><b>Border No</b></td>
                              <td>{{ $payment->border_no }}</td>
                              <td></td>
                            </tr>
                            <tr>
                              <td></td>
                              <td><b>Student Id</b></td>
                              <td>{{ $payment->student->student_id }}</td>
                              <td></td>
                            </tr>
                             <tr>
                              <td></td>
                              <td><b>Session</b></td>
                              <td>{{ $payment->session }}</td>
                              <td></td>
                            </tr> 
                            <tr>
                              <td></td>
                              <td><b>Level</b></td>
                              <td>{{ $payment->level }}</td>
                              <td></td>
                            </tr>
                            <tr>
                              <td></td>
                              <td><b>Semester</b></td>
                              <td>{{ $payment->semester }}</td>
                              <td></td>
                            </tr>
                            <tr>
                              <td></td>
                              <td><b>Duration</b></td>
                              <td>{{ $payment->duration.' '.$payment->year }}</td>
                              <td></td>
                            </tr>   
                             <tr>
                              <td></td>
                              <td><b>Amount</b></td>
                              <td>{{ $payment->amount }}</td>
                              <td></td>
                            </tr> 
                            <tr>
                              <td></td>
                              <td><b>Due</b></td>
                              <td>{{ $payment->due }}</td>
                              <td></td>
                            </tr>                        
                                            
                          </table>
                        </div> 

                        <div class="modal-footer">
                          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                          
                        <a href="{{ url('/admin/pdf')  }}">  <button type="button" class="btn btn-primary">Download</button></a>
                        </div>
                      </div>
                    </div>
                  </div>

                </td>
                

                <td><a href="{{ route('payment.edit',$payment->id) }}" class="btn btn-outline-primary "><i class="fa fa-edit"></i></a></td>

                <td>
                  <a href="" class="btn btn-outline-danger" data-toggle="modal" data-target="#deleteModal{{ $payment->id }}"><i class="fa fa-trash"></i></a>
                  <div class="modal fade" id="deleteModal{{ $payment->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5>Delete Payment</h5>
                          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          Are You Sure Want To Delete This ?
                        </div>
                        <div class="modal-footer">
                          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                          <form action="{{ route('payment.destroy',$payment->id) }}" method="POST">
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
                <th>Border</th>
                <th>Duration</th>
                <th>Amount</th>
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

