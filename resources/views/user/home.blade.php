<!DOCTYPE html>
<html lang="en">

<head>

  @include('user/layouts/head')


</head>


<body>

  <!-- Navigation Bar -->

  @include('user/layouts/nav')
  @include('user/layouts/slider')

  <!-- Navigation Bar End -->
 @section('main-content')
  
  @show

  @include('user/layouts/notices')
  @include('user/layouts/comment')
 
  <!-- Footer Part -->

  @include('user/layouts/footer')

  <!-- End Footer Part -->

</body>
</html>
