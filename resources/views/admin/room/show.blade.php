
@extends('admin.layouts.app')


@section('main-content')

<div class="content-wrapper">
  <div class="container-fluid">
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="#">Dashboard</a>
      </li>
      <li class="breadcrumb-item active">Faculties</li>
    </ol>

    <div class="card mb-3">
      <div class="card-header">
        <i class="fa fa-table"></i> All Faculties
        <a class="col-lg-offset-5 btn btn-success float-right btn-sm" href="{{ route('room.create')}}">Add new </a>
      </div>
      <div class="box">

      </div>

      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>S.No</th>
                <th>Block</th>
                <th>Room No</th>
                <th>Floor</th>
                <th>Edit</th>
                <th>Delete</th>
              </tr>
            </thead>
            <tbody>
              @foreach($rooms as $room)
              <tr>
                <td>{{ $loop->index+1 }}</td>
                <td>{{ $room->block }}</td>
                <td>{{ $room->room_no }}</td>
                <td>{{ $room->floor }}</td>

                <td><a href="{{ route('room.edit',$room->id) }}" class="btn btn-outline-primary"><i class="fa fa-edit"></i></a></td>

                <td>
                  <a href="" class="btn btn-outline-danger" data-toggle="modal" data-target="#deleteModal{{ $room->id }}"><i class="fa fa-trash"></i></a>
                  <div class="modal fade" id="deleteModal{{ $room->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5>Delete Room</h5>
                          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          Are You Sure Want To Delete This ?
                        </div>
                        <div class="modal-footer">
                          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                          <form action="{{ route('room.destroy',$room->id) }}" method="POST">
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
                <th>Block</th>
                <th>Room No</th>
                <th>Floor</th>
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

