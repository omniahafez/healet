<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  @include('includes.head')
</head>

<body>

  <!-- header section strats -->
  @include('includes.headerInner')
  <!-- end header section -->

  @yield('content')

  <!-- footer section -->
  @include('includes.footer')
  <!-- footer section -->


  @include('includes.footerJs')

</body>

</html>