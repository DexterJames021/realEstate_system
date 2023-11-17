<header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="{{ route('index')}}" class="logo">
                        <!-- <h1>SVG</h1> -->
                        <img src="{{ asset('assets/front/assets/images/rlc_logo.png')}}" alt="">
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav" style="color:blue;">
                      <li><a href="{{ route('index')}}" >Home</a></li>
                      <li><a href="{{ route('properties')}}">Properties</a></li>
                      <li><a href="{{ route('contact-us')}}">Contact Us</a></li>
                      <!-- <li><a href="#">Overview</a></li> -->
                      <li><a href="{{ route('appointment')}}"><i class="fa fa-calendar"></i> Book Appointment</a></li>
                  </ul>   
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
  </header>