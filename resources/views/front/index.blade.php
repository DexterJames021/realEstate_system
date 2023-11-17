@extends('layouts.index')
@section('content')

<!-- PROPERTIES -->
<!-- 
* like table gagawa ng foreach pero sa card
* then discription kukuhain sa database and didisplay 
* tuwing may idadadag na properties 
 -->
    <div class="grid-main">
        <div class="container">
          <div class="row">
            <div class="col-lg-4 col-md-12 mx-5">
              <div class="section-heading ">
                <h6>| Welcome </h6>
                <h2>Sierra Valley Garden's</h2>
                <span class="badge text-dark  my-2 p-2 bg-warning">Pre-Selling</span>
                <p>
                <span style="color: #000b8c;">Project brief: </span>Sierra Valley Gardens is a sprawling residential area tucked
                within Sierra Valley, a large master planned mixed-used development ready to unfold a thriving, 
                independent community of its own. This estate will feature lifestyle destinations, bussiness offices,
                and a residential district, giving you the perfect ingredients for a perfect oasis set to cater to young 
                professionals, start-up families and invetors. 
                </p>
              </div>
            </div>
            <div class="col-lg-5 col-md-10 mt-5 mx-5">
              <img src="{{ asset('assets/front/assets/images/siera_wide_logo.png')}}" alt="">
            </div>
          </div>
            <div class="col  "> 
                <div class="row ">
                    <!-- ? first row horizontal  -->
                    <div class="col-sm-12 col-md-7 mb-0 mb-sm-0  box-1"> <!-- ? horizontal  -->
                        <div class="grid-box mb-1 style_1">
                            <div class="grid-content title_top">
                              <span class="overlay-bg bg-primary"></span>
                              <img src="{{ asset('RLCresidences_images/human_pers_1.jpg')}}" alt="" class="">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-5 mb-0 box-1"> <!-- ? box  -->
                        <div class="grid-box style_1">
                            <div class="grid-content title_top">
                              <span class="overlay-bg bg-secondary"></span>
                              <img src="{{ asset('RLCresidences_images/amet_2.jpg')}}" alt="" class="">
                            </div>
                        </div>
                    </div>

                    <!-- ? second row horizontal  -->
                    <div class="col ">  
                        <div class="row ">
                            <div class="col-sm-12 col-md-5 col-lg-5 box-1"> <!-- ? box  -->
                                <div class="grid-box style_1">
                                    <div class="grid-content title_top">
                                      <span class="overlay-bg bg-warning"></span>
                                      <img src="{{ asset('RLCresidences_images/amet_3.jpg')}}" alt="" class="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-7 col-lg-7  box-1"> <!-- ? horizontal  -->
                                <div class="grid-box style_1">
                                    <div class="grid-content title_top">
                                      <span class="overlay-bg bg-danger"></span>
                                      <img src="{{ asset('RLCresidences_images/amet_7.jpg')}}" alt="" class="">
                                    </div>
                                </div>
                            </div>
                    
                        </div>
                    </div>
                </div>
                
            </div>
            <div class="row mt-5">
                <div class="col-lg-9 mt-5">
                    <img src="{{ asset('assets/front/assets/images/map.jpg')}}" alt="" height="100%">
                </div>
                <div class="col-lg-3 mt-5">
                  <div class="section-heading ">
                    <h6>| Site Future Plan </h6>
                    <h2>Sierra Valley Garden's</h2>
                    <p>
                    <span style="color: #000b8c;">Near?</span>
                    Just 30 minutes away from ortigas CBD and conveniently located between the two 
                    cities of Cainta and Taytay, Sierra Valley Gardens is within proximity to 
                    commercial center, hospitals, churched, schools, and cultural experiences. 
                    </p>
                  </div>
              </div>
             
          </div>
          <div class="col-lg-12 col-sm-12 ">
            
          <div class="row">
              <div class="col d-lg-flex my-4">
                  <ul class="mx-5 my-3">
                    <li><p class="fw-bold"> Schools</p></li>
                    <li><p>Siena College of Taytay</p></li>
                    <li><p>San Beda University Taytay</p></li>
                    <li><p>De La Salle - Antipolo</p></li>
                    <li><p>Ateneo de Manila University</p></li>
                    <li class="mb-4"><p>UP Diliman</p></li>
                  </ul>
                  <ul class="mx-5 my-3">
                    <li><p class="fw-bold"> Healthcare</p></li>
                    <li><p>Metro Rizal Doctors Hospital</p></li>
                    <li><p>Unciano Medical Center</p></li>
                    <li><p>The Medical City</p></li>
                    <li><p>Ortigas Hospital & Healthcare Center</p></li>
                  </ul>
              <!-- </div> -->
              <!-- <div class="col my-3"> -->
                  <ul class="mx-5 my-3">
                    <li><p class="fw-bold"> Commercial Areas</p></li>
                    <li><p>Robinsons Galleria</p></li>
                    <li><p>RP Antipolo</p></li>
                    <li><p>Robinsons Metroeast</p></li>
                    <li class="mb-4"><p>Megamall</p></li>
                  </ul>
                  <ul class="mx-5 my-3">
                    <li><p class="fw-bold">Transportation Hubs</p></li>
                    <li><p>P2P Robinsons Galleria</p></li>
                    <li><p>LRT 2 - Santolan</p></li>
                    <li><p>C6 Road</p></li>
                    <li><p>NAIA 3</p></li>
                    <li><p>Future LRT4 - Taytay Tikling</p></li>
                    <li><p>Junction Station</p></li>
                  </ul>
              </div>
            </div>
          </div>


          </div>
        </div>



@endsection