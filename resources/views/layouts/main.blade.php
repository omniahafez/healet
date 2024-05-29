<!DOCTYPE html>
<html>

<head>
  @include('includes.head')

</head>

<body>

  <!-- header section strats -->
  @include('includes.header')
  <!-- end header section -->
@yield('content')
  <!-- footer section -->
  @include('includes.footer')
  <!-- footer section -->


  @include('includes.footerJs')

</body>

</html>