<!DOCTYPE html>
<html lang="en">

<head>

  @include('user/layouts/head')

</head>


<body>

  <!-- Navigation Bar -->

  @include('user/layouts/nav')

  <!-- Navigation Bar End -->
 @section('main-content')
  
  @show

  <!-- Slider + Provost Message -->
{{-- 
  @include('user/layouts/slider')

  End Slider + Provost Message
 

  Main Content Parts
  
  @include('user/layouts/notices')

  <!-- End Student Comment Box --> --}}


  <!-- Footer Part -->

  @include('user/layouts/footer')

  <!-- End Footer Part -->
  
</body>
</html>
