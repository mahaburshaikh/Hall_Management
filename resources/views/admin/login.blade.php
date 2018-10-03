<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>SB Admin - Start Bootstrap Template</title>
  <!-- Bootstrap core CSS-->
  <link rel="stylesheet" href="{{ asset('user/css/bootstrap/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('user/css/font-awesome/css/font-awesome.min.css') }}">
  <link rel="stylesheet" href="{{ asset('user/css/css/sb-admin.css') }}">
</head>

<body class="bg-dark">
  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Login</div>
      <div class="card-body">

        @include('includes.message')

        <form method="post" action="{{ route('admin.login') }}"> 
          {{ csrf_field() }}
          <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input class="form-control" name="email" id="exampleInputEmail1" type="email" aria-describedby="emailHelp" placeholder="Enter email">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input class="form-control" name="password" id="exampleInputPassword1" type="password" placeholder="Password">
          </div>
          <div class="form-group">
            <div class="form-check">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox"> Remember Password</label>
              </div>
            </div>
            <button type="submit" class="btn btn-primary btn-block" >Login</button>
          </form>
          <div class="text-center">
            
            <a class="d-block small" href="">Forgot Password?</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('user/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('user/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- Core plugin JavaScript-->
    <script src="{{ asset('user/jquery-easing/jquery.easing.min.js') }}"></script>
  </body>

  </html>
