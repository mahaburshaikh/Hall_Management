 
@extends('admin.layouts.app')


@section('main-content')

<div class="content-wrapper">
  <div class="container-fluid">
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="#">Dashboard</a>
      </li>
      <li class="breadcrumb-item active">View Complains</li>
    </ol>

    <div class="card mb-3">
      <div class="card-header">
        <i class="fa fa-table"></i> All Complains
      </div>
      <div class="box">

      </div>

      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>S.No</th>
                <th>Student Name</th>
                <th>Student_id</th>
                <th>Complain</th>
              </tr>
            </thead>
            <tbody>
              @foreach($complains as $complain)
              <tr>
                <td >{{ $loop->index+1 }}</td>
                <td>{{ $complain->student->first_name.' '.$complain->student->last_name }}</td>
                <td>{{ $complain->student->student_id }}</td>
                <td>{{   $complain->message }}</td>
              </tr>
              @endforeach
            </tbody>
            <tfoot>
              <tr>
                <th>S.No</th>
                <th>Student Name</th>
                <th>Student_id</th>
                <th>Complain</th>
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

