<!doctype html>
<html lang="en">

  <head>
    <title>CarRental &mdash; Free Website Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700;900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('website/fonts/icomoon/style.css')}}">

    <link rel="stylesheet" href="{{asset('website/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('website/css/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" href="{{asset('website/css/jquery.fancybox.min.css')}}">
    <link rel="stylesheet" href="{{asset('website/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('website/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('website/fonts/flaticon/font/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('website/css/aos.css')}}">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="{{asset('website/css/style.css')}}">
  </head>
  <body>


    <div class="site-wrap" id="home-section">

      <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
          <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
          </div>
        </div>
        <div class="site-mobile-menu-body"></div>
      </div>



      <header class="site-navbar site-navbar-target" role="banner">

        <div class="container">
          <div class="row align-items-center position-relative">

            <div class="col-3">
              <div class="site-logo">
                <a href="index.html"><strong>CarRental</strong></a>
              </div>
            </div>

            <div class="col-9  text-right">

              <span class="d-inline-block d-lg-none"><a href="#" class=" site-menu-toggle js-menu-toggle py-5 "><span class="icon-menu h3 text-black"></span></a></span>

              <nav class="site-navigation text-right ml-auto d-none d-lg-block" role="navigation">
                <ul class="site-menu main-menu js-clone-nav ml-auto ">
                  <li class="active"><a href="{{route('home')}}" class="nav-link">Home</a></li>
                  <li><a href="{{route('listing')}}" class="nav-link">Listing</a></li>
                  <li><a href="{{route('testimonials')}}" class="nav-link">Testimonials</a></li>
                  <li><a href="{{route('blog')}}" class="nav-link">Blog</a></li>
                  <li><a href="{{route('about')}}" class="nav-link">About</a></li>
                  <li><a href="{{route('contact')}}" class="nav-link">Contact</a></li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </header>
      @yield('content')

      <footer class="site-footer">
        @include('layouts.website.footer')
     </footer>


    </div>

    <script src="{{asset('website/js/popper.min.js')}}"></script>
    <script src="{{asset('website/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('website/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('website/js/jquery.sticky.js')}}"></script>
    <script src="{{asset('website/js/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('website/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('website/js/jquery.animateNumber.min.js')}}"></script>
    <script src="{{asset('website/js/jquery.fancybox.min.js')}}"></script>
    <script src="{{asset('website/js/jquery.easing.1.3.js')}}"></script>
    <script src="{{asset('website/js/bootstrap-datepicker.min.js')}}"></script>
    <script src="{{asset('website/js/aos.js')}}"></script>
    <script src="{{asset('website/js/main.js')}}"></script>

  </body>

</html>

