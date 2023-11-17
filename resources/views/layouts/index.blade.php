<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>RLC Residences | Sierra Valley Garden's</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('assets/front/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{ asset('assets/front/assets/css/fontawesome.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/front/assets/css/templatemo-villa-agency.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/front/assets/css/owl.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/front/assets/css/animate.css')}}">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
    <!-- icon -->
    <link rel="shortcut icon" href="{{ asset('\favicon.ico')}}" />
  </head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- sub-header -->
@include('front.includes.sub-header')
  <!--end sub-header -->

  <!-- ***** Header Area Start ***** -->
@include('front.includes.header-area')
  <!-- ***** Header Area End ***** -->

  <!-- main-banner -->
  @include('front.includes.main-banner')
  <!-- main-banner end -->

  <div class="section mt-5">
 <!--  featured -->
 @yield('content')
  <!-- end featured -->

  </div>

    <!-- features -->
    <!-- video and counter -->
 @include('front.includes.features')
  <!-- end features -->
  
 

  <!-- contact -->
 @include('front.includes.contact')
  <!-- end contact -->

  <!-- footer -->
  @include('front.includes.footer')
  <!-- end footer -->

  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="{{ asset('assets/front/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{ asset('assets/front/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
  <script src="{{ asset('assets/front/assets/js/isotope.min.js')}}"></script>
  <script src="{{ asset('assets/front/assets/js/owl-carousel.js')}}"></script>
  <!-- <script src="{{ asset('assets/front/assets/js/counter.js')}}"></script> -->
  <script src="{{ asset('assets/front/assets/js/custom.js')}}"></script>
  <script src="{{ asset('assets/front/assets/js/customscript.js')}}"></script>

  </body>
</html>