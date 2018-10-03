
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
        <h4>Edit Payment</h4>
      </li>
    </ol>
    <form role="form" method="post" action="{{ route('payment.update',$payments->id) }}" enctype="multipart/form-data" data-parsley-validate>
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
      {{ method_field('PUT') }}
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <div class="form-group">
              <label for="border_no">Border No</label>
              <input class="form-control" type="text" name="border_no" id="border_no" placeholder="Border No" value="{{ $payments->border_no }}">
            </div>
            <div class="form-group">
              <label for="level">Level</label>
              <select name="level" id="level" class="form-control">
                <option value="">Select Level</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
              </select>
            </div> 
            <div class="form-group">
              <label for="semester">Semester</label>
              <select name="semester" id="semester" class="form-control">
                <option value="">Select Semester</option>
                <option value="1">1</option>
                <option value="2">2</option>
              </select>
            </div>
          </div>
          <div class="col-lg-6">     
            <div class="form-group">
              <label for="duration">Duration</label>
              <select name="duration" id="duration" class="form-control">
                <option value="">Select Duration</option>
                <option value="Januray To June">Januray To June</option>
                <option value="July To December">July To December</option>
                <option value="Januray To December">Januray To December</option>
              </select>
            </div>
            <div class="form-group">
              <label for="amount">Amount</label>
              <input class="form-control" type="text" name="amount" id="amount" value="1320" value="{{ $payments->amount }}">
            </div>
            <div class="form-group">
              <label for="due">Due</label>
              <input class="form-control" type="text" name="due" id="due" placeholder="Due" value="{{ $payments->due }}">
            </div>
            <div class="box-footer">
              <button type="submit" class="btn btn-success">Submit</button>
              <a href="{{ route('payment.index') }}" type="button" class="btn btn-warning" >Back</a>
            </div>

          </div>

        </div>
        
      </div>

    </form>

  </div>
</div>
@endsection
@section('footerSection')
<script>
 $(document).ready(function(){
   $('.select2').select2();
   $('.select2-room').select2();
 });
</script>
@endsection

