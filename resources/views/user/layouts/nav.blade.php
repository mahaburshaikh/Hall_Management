  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="{{ asset('/') }}"><i class="fa fa-home"></i></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="{{ asset('/') }}">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ asset('session')}}">Sessions</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ asset('room') }}">Rooms</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ asset('employee') }}">Employees</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ asset('provost') }}">Provosts</a>
          </li>
        </ul>


        <form class="form-inline my-2 my-lg-0" action="{{ route('searchQuery') }}" method="post">
          {{ csrf_field() }}
          <div class="input-group">
            <input type="text" name="searchQuery" class="form-control" placeholder="Search for..." aria-label="Search for...">
            <span class="input-group-btn">
              <button class="btn btn-success" type="submit"><i class="fa fa-search"></i></button>
            </span>
          </div>
        </form>

        <ul class="navbar-nav ml-auto">

          <li class="nav-item active">
            @if(Auth::guest())
            <a class="nav-link" href="{{route('login')}}">Login</a>
            @else

              <a href="{{ route('logout') }}"
              onclick="event.preventDefault();
              document.getElementById('logout-form').submit();">
              Logout
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              {{ csrf_field() }}
            </form>
            @endif
          </li>
        </ul>

      </div>
    </div>
  </nav>

@section('nav')

@show