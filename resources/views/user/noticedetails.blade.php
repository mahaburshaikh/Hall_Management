
<!DOCTYPE html>
<html lang="en">

<head>

  @include('user/layouts/head')

</head>


<body>



  @include('user/layouts/nav')

  @include('user/layouts/slider')

  <!-- Navigation Bar End -->
 @section('main-content')
  
  @show

  @include('user/layouts/notice_details')
  @include('user/layouts/comment')
 
  <!-- Footer Part -->

  @include('user/layouts/footer')

  <!-- End Footer Part -->
  
</body>
</html>




