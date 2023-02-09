<div class="container-fluid">
    <div class="row align-items-center bg-light px-lg-5">
        <div class="col-12 col-md-8 ">
            <div class="d-flex justify-content-between">
                <div class="bg-primary text-white text-center py-2" style="width: 100px;">Tranding</div>
                <div class="owl-carousel owl-carousel-1 tranding-carousel position-relative d-inline-flex align-items-center ml-3" style="width: calc(100% - 100px); padding-left: 90px;">


                    <div class="text-truncate"><a class="text-secondary" href="">Picnic </a></div>

                </div>
            </div>
        </div>
        <div class="col-md-4 text-right d-none d-md-block">
            {{-- Monday, January 01, 2045 --}}
            {{ date('l') }}, {{  date('F d, Y,H:i:s') }}
        </div>
    </div>
    <div class="row align-items-center py-2 px-lg-5">
        <div class="col-lg-4">
            <a href="" class="navbar-brand d-none d-lg-block">
                {{-- <h5 class="m-0 display-5 text-uppercase"><span class="text-primary"><span>Kazi</span>News</span>Room</h5> --}}
                <h4 class=""><span class="logocolor">K</span>azi<span class="logocolor">N</span>ews<span class="logocolor">R</span>oom</h4>
            </a>
        </div>
        <div class="col-lg-8 text-center text-lg-right">
            <img class="img-fluid" src="img/ads-700x70.jpg" alt="">
        </div>
    </div>
</div>
<!-- Topbar End -->


<!-- Navbar Start -->
<div class="container-fluid p-0 mb-3">
    <nav class="navbar navbar-expand-lg bg-info navbar-light py-2 py-lg-0 px-lg-5">
        <a href="" class="navbar-brand d-block d-lg-none">
            <h1 class="m-0 display-5 text-uppercase"><span class="text-primary">News</span>Room</h1>
        </a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between px-0 px-lg-3" id="navbarCollapse">
            <div class="navbar-nav mr-auto py-0">
                <a href="{{ route('index') }}" class="nav-item nav-link active">Home</a>
                <a href="{{ url('/admin') }}" class="nav-item nav-link">Backend</a>
                <a href="single.html" class="nav-item nav-link">Single News</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Dropdown</a>
                    <div class="dropdown-menu rounded-0 m-0">
                        <a href="#" class="dropdown-item">Menu item 1</a>
                        <a href="#" class="dropdown-item">Menu item 2</a>
                        <a href="#" class="dropdown-item">Menu item 3</a>
                    </div>
                </div>
                <a href="{{ route('contact_us') }}" class="nav-item nav-link">Contact Us</a>
            </div>
            <div class="input-group ml-auto" style="width: 100%; max-width: 300px;">
                <input type="text" class="form-control" placeholder="Keyword">
                <div class="input-group-append">
                    <button class="input-group-text text-secondary"><i
                            class="fa fa-search"></i></button>
                </div>
            </div>
        </div>
    </nav>
</div>
<!-- Navbar End -->
