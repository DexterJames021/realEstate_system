<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>RLC Residences | @yield('title')</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('\../assets/front/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{ asset('\../assets/front/assets/css/fontawesome.css')}}">
    <link rel="stylesheet" href="{{ asset('\../assets/front/assets/css/templatemo-villa-agency.css')}}">
    <link rel="stylesheet" href="{{ asset('\../assets/front/assets/css/owl.css')}}">
    <link rel="stylesheet" href="{{ asset('\../assets/front/assets/css/animate.css')}}">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>

    <!-- datepicker -->
    <link rel="shortcut icon" href="{{ asset('\favicon.ico')}}" />
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css"> -->
  </head>

<body class="bg-light">
    @include('front.includes.sub-header')

  <!-- ***** Header Area Start ***** -->
    @include('front.includes.header-area')
  <!-- ***** Header Area End ***** -->

  <!-- <div class="page-heading header-text">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h3>Book an Appointment </h3>
        </div>
      </div>
    </div>
  </div> -->

  <div class="contact-page section mt-5 ">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="section-heading">
            <h6>| Appointment </h6>
            <h2>Get In Touch With Our Agents</h2>
          </div>
          <p>
          Envisioned by world-class designers, RLC Residences are located in sought after 
          center districts and destination estate that bring together the best in home, 
          leisure and work. RLC Residences - building the homes of your dreams.   
          </p>
          <div class="row">
            <div class="col-lg-12">
              <div class="item phone">
                <img src="{{ asset('assets/front/assets/images/invert/yellows/phone-icon-yellow.png')}}" alt="" style="max-width: 52px;">
                <h6>010-020-0340<br><span>Phone Number</span></h6>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="item email">
                <img src="{{ asset('assets/front/assets/images/invert/yellows/email-icon-yellow.png')}}" alt="" style="max-width: 52px;">
                <h6>info@villa.co<br><span>Business Email</span></h6>
              </div>
            </div>
          </div>
        </div>

        @yield('content')

      </div>
    </div>
  </div>

  <!-- footer -->
@include('front.includes.footer')
<!-- footer end  -->


  <!-- Scripts -->

  <!-- Bootstrap core JavaScript -->
  <script src="{{ asset('assets/front/assets/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{ asset('assets/front/assets/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
  <script src="{{ asset('assets/front/assets/assets/js/isotope.min.js')}}"></script>
  <script src="{{ asset('assets/front/assets/assets/js/owl-carousel.js')}}"></script>
  <script src="{{ asset('assets/front/assets/assets/js/counter.js')}}"></script>
  <script src="{{ asset('assets/front/assets/assets/js/custom.js')}}"></script>
    <!-- datepicker -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>

  </body>
</html>





