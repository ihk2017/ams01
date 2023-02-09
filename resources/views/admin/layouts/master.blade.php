<!DOCTYPE html>
<html lang="en">

<head>
<!--======== head start========= -->
@include('admin.inc.head');
<!-- =======head end ========== -->
</head>

<body>

  <!-- ======= Header ======= -->
  @include('admin.inc.header');

  <!-- End Header -->

  <!-- ======= Sidebar ======= -->
  @include('admin.inc.sidebar');

  <!-- End Sidebar-->

  <main id="main" class="main">

    @yield('contents')


  </main>
  <!-- End #main -->

  <!-- ======= Footer ======= -->
    @include('admin.inc.footer');
  <!-- End Footer -->

<!-- start tail -->
@include('admin.inc.tail')
<!-- End tail -->



</body>

</html>
