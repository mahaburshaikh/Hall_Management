<header class="main-header ">

    {{-- <div class="container">
      <div class="row">

        <div class="col-md-8 col-sm-12"> --}}
          <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
              <div class="carousel-item active">
                <img class="d-block img img-responsive" src="{{ asset('user/images/slide/slide1.jpg') }}" alt="First slide">
              </div>
              <div class="carousel-item">
                <img class="d-block img img-responsive" src="{{ asset('user/images/slide/slide2.jpg') }}" alt="Second slide">
              </div>
              <div class="carousel-item">
                <img class="d-block img img-responsive" src="{{ asset('user/images/slide/slide3.jpg') }}" alt="Third slide">
              </div>
              <div class="carousel-item">
                <img class="d-block img img-responsive" src="{{ asset('user/images/slide/slide4.jpg') }}" alt="Forth slide">
              </div>
              <div class="carousel-item">
                <img class="d-block img img-responsive" src="{{ asset('user/images/slide/slide5.jpg') }}" alt="Fifth slide">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        {{-- </div> --}}
        <div class="container mt-2"> 
        <div class="row">
          <div class="col-md-8 wow slideInLeft">
            <h4 class="wow slideInLeft" style="border-bottom: 1px solid #067733;color:rgb(11, 76, 31); ">Overview</h4>

            @php 
                $message = str_limit($hall_details->message, 800);
              @endphp

              {{ $message.'...' }}

              <div class="clearfix"></div> 

            <div style="margin-top: 20px"><a href="{{ asset('halldetails') }}" class="float-right btn btn-primary btn-outline" >Discover More...</a>
            </div>
          </div>
        <div class="col-md-4 col-sm-12 advisor-message" style="border: 1px solid #83a4c4;">
          <h3 class="wow slideInRight" style="border-bottom: 1px solid #067733;color:rgb(11, 76, 31); ">Message From Provost</h3>
          <div class="row">
            <div class="col-sm-8 wow slideInUp">
              @php 
                $message = str_limit($provostMessage->message, 250);
              @endphp

              {{ $message.'...' }}

              <div class="clearfix"></div>
            </div>
            <div class="col-sm-4">
              <img src="{{ asset('user/images/provost/advisor.jpg') }}" class="img img-responsive img-thumbnail wow slideInDown" alt="Advisor">
            </div>
          </div>
          <div mb-2><a href="{{ asset('provostmessagedetails')}}" class="float-right btn btn-primary btn-outline" >Read More...</a></div>
          </div>
        </div>
        </div>
     {{--  </div>
    </div> --}}

  </header>

@section('slider')

@show
