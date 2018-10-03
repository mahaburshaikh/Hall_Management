
  <!-- Student Comment Box -->
  <div class="container">
  <div class="student-comment-box">
    
      <h3 style="color: #136b36;border-bottom: 1px solid rgb(11, 76, 31);margin-bottom: 31px">Student Complain Box</h3>
      <form action="{{ route('submitMessage') }}" method="post">
        @if(session()->has('success'))
          <p class="alert-danger">{{ session('success')}}</p>
        @endif
        {{ csrf_field() }} 
        <div class="form-group row">
          <label style="color: #0c5460;font-size: 20px" for="inputEmail3" class="col-md-2 col-form-label"><b>Student Name</b></label>
          <div class="col-md-10" >
            <input style="box-shadow: 5px 4px 30px -4px #414248;border: 1px solid #0c6b22;
" type="text" class="form-control" id="inputEmail3" placeholder="Enter your name" @if(Auth::guard('web')->check()) value="{{ Auth::guard('web')->user()->first_name }}" @endif>
          </div>
        </div>
        <div class="form-group row">
          <label style="color: #0c5460;font-size: 20px" for="inputEmail3" class="col-md-2 col-form-label"><b>Student ID</b></label>
          <div class="col-md-10">
            <input style="box-shadow: 5px 4px 30px -4px #414248;    border: 1px solid #0c6b22;" type="text" class="form-control" id="inputEmail3" placeholder="Enter your university ID" @if(Auth::guard('web')->check()) value="{{ Auth::guard('web')->user()->student_id }}" @endif>
          </div>
        </div>
        <div class="form-group row">
          <label style="color: #0c5460;font-size: 20px" for="inputEmail3" class="col-sm-2 col-form-label"><b>Complain Box</b></label>s
          <div class="col-sm-10" >
            <textarea style="box-shadow: 5px 4px 30px -4px #414248;border: 1px solid #0c6b22;" class="form-control" rows="10" id="inputEmail3" name="message" placeholder="Enter your problem facing..."></textarea>
          </div>
        </div>


        <div class="form-group row">
          <div class="col-sm-10 offset-2">
            <button type="submit" class="btn btn-primary">Submit Your Comment</button>
          </div>
        </div>
      </form>
    </div>
  </div>

@section('complain')

@show