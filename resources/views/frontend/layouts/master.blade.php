<!DOCTYPE html>
<html lang="en">

<head>
 @include('frontend.inc.head')
</head>

<body>
    <!-- Topbar Start -->
    @include('frontend.inc.header')
 <!-- Topbar end -->

    <!-- Top News Slider Start -->
    @yield('content')
    <!-- News With Sidebar End -->


    <!-- Footer Start -->
    @include('frontend.inc.footer')
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-dark back-to-top"><i class="fa fa-angle-up"></i></a>


@include('frontend.inc.script')
</body>

</html>
