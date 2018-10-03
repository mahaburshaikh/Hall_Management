
@extends('admin.layouts.app') 


@section('main-content')

<div class="content-wrapper">
  <div class="container-fluid">
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="#">Dashboard</a>
      </li>
      <li class="breadcrumb-item active">Provosts</li>
    </ol>

    <div class="card mb-3">
      <div class="card-header">
        <i class="fa fa-table"></i> All Provosts
        <a class="col-lg-offset-5 btn btn-success float-right btn-sm" href="{{ route('provost.create')}}">Add new </a>
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
                <th>Designation</th>
                <th>Faculty</th>
                <th>Department</th>
                <th>View</th>
                <th>Edit</th>
                <th>Delete</th>
              </tr>
            </thead>
            <tbody>
              @foreach($provosts as $provost) 
              <tr>
                <td>{{ $loop->index+1 }}</td>
                <td>{{ $provost->name }}</td>
                <td>{{ $provost->designation }}</td>
                <td>{{ $provost->faculty->short_name }}</td>
                <td>{{ $provost->department->short_name }}</td>

                <td class="text-center"><a href=" " class="btn btn-outline-success" data-toggle="modal" data-target="#viewModal{{ $provost->id }}"><i class="fa fa-eye"></i></a>

                  <div class="modal fade bd-example-modal-lg" id="viewModal{{ $provost->id }}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5>{{ $provost->name }} Details</h5>
                          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                          </button>
                        </div>

                        <div class="modal-body">
                          <div>
                            
                          </div>
                          <table class="table" style="border: none;">
                            
                               
                              <div>
                              <img class="provost_picture" src="{{ asset('images/provost/'.$provost->image) }}" />
                              </div>
                            
                            <tr>
                              <td></td>
                              <td><b>Name</b></td>
                              <td>{{ $provost->name }}</td>
                              <td></td>
                            </tr>
                            <tr>
                              <td></td>
                              <td><b>Designation</b></td>
                              <td>{{ $provost->designation }}</td>
                              <td></td>
                            </tr>
                            <tr>
                              <td></td>
                              <td><b>Faculty</b></td>
                              <td>{{ $provost->faculty->short_name}}</td>
                              <td></td>
                            </tr>
                            <tr>
                              <td></td>
                              <td><b>Department</b></td>
                              <td>{{ $provost->department->short_name}}</td>
                              <td></td>
                            </tr>
                            <tr>
                              <td></td>
                              <td><b>Email</b></td>
                              <td>{{ $provost->email }}</td>
                              <td></td>
                            </tr>
                            <tr>
                              <td></td>
                              <td><b>Phone Number</b></td>
                              <td>{{ $provost->phone }}</td>
                              <td></td>
                            </tr>
                            <tr>
                              <td></td>
                              <td><b>Address</b></td>
                              <td>{{ $provost->address }}</td>
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

                <td><a href="{{ route('provost.edit',$provost->id) }}" class="btn btn-outline-primary "><i class="fa fa-edit"></i></a></td>

                <td>
                  <a href="" class="btn btn-outline-danger" data-toggle="modal" data-target="#deleteModal{{ $provost->id }}"><i class="fa fa-trash"></i></a>
                  <div class="modal fade" id="deleteModal{{ $provost->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5>Delete Provost</h5>
                          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          Are You Sure Want To Delete This ?
                        </div>
                        <div class="modal-footer">
                          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                          <form action="{{ route('provost.destroy',$provost->id) }}" method="POST">
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
                <th>Designation</th>
                <th>Faculty</th>
                <th>Department</th>
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

