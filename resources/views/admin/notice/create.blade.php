
@extends('admin.layouts.app')
@section('main-content')
<div class="content-wrapper">
  <div class="container-fluid">
    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="{{ route('admin.home') }}">Dashboard</a>
      </li>
    </ol>

    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <h4>Add Notices</h4>
      </li>
    </ol>
    <form role="form" method="post" action="{{ route('notice.store') }}" data-parsley-validate>
      @if($errors->any())
      <div class="alert alert-danger">
        <ul>
          @foreach($errors->all() as $errors)
          <p>{{$errors}}</p>
          @endforeach
        </ul>
      </div>
      @endif
      {{csrf_field()}}
      <div class="container">
        <div class="row">
          <div class="col-md-2">
          </div>
          <div class="col-md-9">
           <div class="form-row">
             <div class="col-md-6">
                <div class="form-group">
              <label for="title">Title</label>
              <input class="form-control" type="text" name="title" id="title" placeholder=" Title ">
            </div>
             </div>
             <div class="col-md-6">
                <div class="form-group">
              <label for="file">Input File</label>
              <input class="form-control" type="file" name="file" id="file" placeholder="Input File">
          </div>
             </div>
           </div>
           
             <div class="form-group">
              <label for="description">Description</label>
               <textarea class="textarea form-control" placeholder="Enter Description" name="body" id="editor1" 
                style="width: 100%; height: 400px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" id="editor1"></textarea>
          </div>

            <div class="box-footer">
              <button type="submit" class="btn btn-success">Submit</button>
              <a href="{{ route('notice.index') }}" type="button" class="btn btn-warning" >Back</a>
            </div>
          </div>
        </div>
      </div>

    </form>

  </div>
</div>
@endsection

@section('footerSection')

<script src="{{asset('user/ckeditor/ckeditor.js')}}"></script>
<script>
  $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('editor1')
    //bootstrap WYSIHTML5 - text editor
    $('.textarea').wysihtml5()
  })
</script>
@endsection