 <div class="footer-bottom">
  <div class="container">
    <div class="row">

      <div class="col-md-3 link"> 
        <ul>
          <li><h5>Top Links</h5></li>
          <li><a href="http://new.pstu.ac.bd/" style="color: #ffffff">PSTU Main Site</a></li>
          <li><a href="" style="color: #ffffff">About Keramat Ali Hall</a></li>
          <li><a href="" style="color: #ffffff">About Sufia Kamal Hall</a></li>
          <li><a href="{{ asset('room') }}" style="color: #ffffff">Rooms</a></li>
        </ul>
      </div>
      <div class="col-md-3">
        <ul>
          <li><h5>Top Links</h5></li>
          <li><a href="http://new.pstu.ac.bd/" style="color: #ffffff">PSTU Main Site</a></li>
          <li><a href="" style="color: #ffffff">About Keramat Ali Hall</a></li>
          <li><a href="" style="color: #ffffff">About Sufia Kamal Hall</a></li>
          <li><a href="{{ asset('provost') }}" style="color: #ffffff">Provosts</a></li>
        </ul>
      </div>
      <div class="col-md-3">
        <ul>
          <li><h5>Top Links</h5></li>
          <li><a href="" style="color: #ffffff">PSTU Main Site</a></li>
          <li><a href="" style="color: #ffffff">About Keramat Ali Hall</a></li>
          <li><a href="" style="color: #ffffff">Bangabandhu Hall</a></li>
          <li><a href="{{ asset('session')}}" style="color: #ffffff">session</a></li>
        </ul>
      </div>
      <div class="col-md-3">
        <ul>
          <li><h5>Top Links</h5></li>
          <li><a href="http://new.pstu.ac.bd/" style="color: #ffffff">PSTU Main Site</a></li>
          <li><a href="" style="color: #ffffff">About Keramat Ali Hall</a></li>
          <li><a href="" style="color: #ffffff">About Sufia Kamal Hall</a></li>
          <li><a href="{{ asset('employee') }}" style="color: #ffffff">Employees</a></li>
        </ul>
      </div>

    </div>
    <p class="text-center">&copy; 2018 All rights reserved PSTU</p>
  </div>
</div>



<!-- End Footer Part -->



<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="{{ asset('user/js/jquery/jquery-3.3.1.min.js') }}"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="{{ asset('user/js/bootstrap/popper.min.js') }}"></script>
<script src="{{ asset('user/js/bootstrap/bootstrap.min.js') }}"></script>



<script src="{{ asset('user/js/wow/wow.min.js') }}"></script>
<script>
  new WOW().init();
</script>

@section('footer')
@show