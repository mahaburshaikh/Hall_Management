
 <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="{{ asset('/') }}">Hall Management</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
          <a class="nav-link" href="{{ route('admin.home') }}">
            <i class="fa fa-fw fa-circle-o"></i>
            Home
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
          <a class="nav-link" href="{{ route('student.index') }}">
            <i class="fa fa-fw fa-circle-o"></i>
            Students
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
          <a class="nav-link" href="{{ route('faculty.index') }}">
            <i class="fa fa-fw fa-circle-o"></i>
            Faculties
          </a>
        </li>

        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
          <a class="nav-link" href="{{ route('session.index') }}">
            <i class="fa fa-fw fa-circle-o"></i>
            <span class="nav-link-text">Sessions</span>
          </a>
        </li>

        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
          <a class="nav-link" href="{{ route('room.index') }}">
            <i class="fa fa-fw fa-circle-o"></i>
            <span class="nav-link-text">Rooms</span>
          </a>
        </li>

        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
          <a class="nav-link" href="{{ route('provost.index') }}">
            <i class="fa fa-fw fa-circle-o"></i>
            <span class="nav-link-text">Provosts</span>
          </a>
        </li>

        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
          <a class="nav-link" href="{{ route('department.index') }}">
            <i class="fa fa-fw fa-circle-o"></i>
            <span class="nav-link-text">Departments</span>
          </a>
        </li>

        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
          <a class="nav-link" href="{{ route('employee.index') }}">
            <i class="fa fa-fw fa-circle-o"></i>
            <span class="nav-link-text">Employees</span>
          </a>
        </li>

        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
          <a class="nav-link" href="{{ route('payment.index') }}">
            <i class="fa fa-fw fa-circle-o"></i>
            <span class="nav-link-text">Payments</span>
          </a>
        </li>
        
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
          <a class="nav-link" href="{{ route('notice.index') }}">
            <i class="fa fa-fw fa-circle-o"></i>
            <span class="nav-link-text">Notices</span>
          </a>
        </li>

        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
          <a class="nav-link" href="{{ route('admin.index') }}">
            <i class="fa fa-fw fa-circle-o"></i>
            <span class="nav-link-text">Admins</span>
          </a>
        </li>

        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
          <a class="nav-link" href="{{ route('complain.index') }}">
            <i class="fa fa-fw fa-circle-o"></i>
            <span class="nav-link-text">View Complains</span>
          </a>
        </li>


        
      </ul>
      {{-- <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul> --}}
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <form class="form-inline my-2 my-lg-0 mr-lg-2" method="post">
            <div class="input-group">
              <input class="form-control" type="text" placeholder="Search for...">
              <span class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fa fa-search"></i>
                </button>
              </span>
            </div>
          </form>
        </li>
      </ul>
        <li class="nav-item">
          {{-- <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
            <i class="fa fa-fw fa-sign-out"></i>Logout</a> --}}


        <a class="btn btn-primary" href="{{route('admin.logout')}}" 
                     onclick="event.preventDefault();
                     document.getElementById('logout-form').submit();" <i class="fa  fa-sign-out"></i>

                     Logout
                  </a>

                  <form action="{{route('admin.logout')}}" method="POST" id="logout-form" style="display: none;">
                    {{ csrf_field() }}
                   
                  </form>
        </li>
      </ul>
    </div>
  </nav>