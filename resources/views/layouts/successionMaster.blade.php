<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>RLC Residences | @yield('title')</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('assets/front/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{ asset('assets/front/assets/css/fontawesome.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/front/assets/css/templatemo-villa-agency.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/front/assets/css/owl.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/front/assets/css/animate.css')}}">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>

    <!-- datepicker -->
    <link rel="shortcut icon" href="{{ asset('\favicon.ico')}}" />
  </head>

<body class="contactBg">
    @include('front.includes.sub-header')

  <!-- ***** Header Area Start ***** -->
    @include('front.includes.header-area')
  <!-- ***** Header Area End ***** -->

  <div class="contact-page section mt-5 ">
    <div class="container">
      <div class="row">
        

        @yield('content')

      </div>
    </div>
  </div>

  <!-- footer -->
@include('front.includes.footer')
<!-- footer end  -->


  <!-- Scripts -->

  <!-- Bootstrap core JavaScript -->
  <script src="{{ asset('../assets/front/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{ asset('../assets/front/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
  <!-- <script src="{{ asset('../assets/front/assets/assets/js/isotope.min.js')}}"></script> -->
  <script src="{{ asset('../assets/front/assets/js/owl-carousel.js')}}"></script>
  <script src="{{ asset('../assets/front/assets/js/custom.js')}}"></script>

  </body>
</html>





