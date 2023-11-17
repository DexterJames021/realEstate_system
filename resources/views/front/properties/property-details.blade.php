@extends('layouts.properties')
@section('content')

  <div class="single-property section">
    <div class="container">
    <div class="row">
      <div class="col-lg-4 offset-lg-4">
          <div class="section-heading text-center">
            <h2 class="m-2">{{$PropertyData->residencialName}}</h2> <br>
            <h6>| Properties Details</h6>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-8">
          <div class="main-image">
            <img src="{{ asset($PropertyData->coverImage)}}" alt="image">
          </div>
          <div class="main-content align-items-center">
              <div class="row">
              <div class="col-6">
                <span class="category">{{$PropertyData->category}}</span>
              </div>

              <div class="col-6">
                <span class="category bg-light text-warning">₱</span>{{$PropertyData->totalPrize}}</span>
              </div>
              </div>

            <h4>{{$PropertyData->unitType}}
            <span class="text-success">|</span>
            <span>{{$PropertyData->residencialName}}</span>
            </h4>
            <p>
            Enjoy the<strong class="" style="color:#000b8c;"> Amenities</strong> available in the {{$PropertyData->residencialName}},
            we put philisophy of Intertional Design into practice. Beyond amazing aesthetic, your experience as a resident is considered 
            at every stage of the design process. The result? The simplest of experience ane made extraordinary, even unforgettable
            </p>

          </div> 
        </div>
        <div class="col-lg-4">
          <div class="info-table">
            <ul>
              <li>
                <img src="{{ asset('assets/front/assets/images/invert/yellows/info-icon-01-yellow.png')}}" alt="" style="max-width: 52px;">
                <h4>450 m2<br><span>Total Flat Space</span></h4>
              </li>
              <li>
                <img src="{{ asset('assets/front/assets/images/invert/yellows/info-icon-02-yellow.png')}}" alt="" style="max-width: 52px;">
                <h4>Contract<br><span>Contract Ready</span></h4>
              </li>
              <li>
                <img src="{{ asset('assets/front/assets/images/invert/yellows/info-icon-03-yellow.png')}}" alt="" style="max-width: 52px;">
                <h4>Payment<br><span>Payment Process</span></h4>
              </li>
              <li>
                <img src="{{ asset('assets/front/assets/images/invert/yellows/info-icon-04-yellow.png')}}" alt="" style="max-width: 52px;">
                <h4>Safety<br><span>24/7 Under Control</span></h4>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="section best-deal mt-2">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="section-heading">
            <h6>| Best Deals </h6>
            <h2>Amenities!</h2>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="tabs-content">
            <div class="row">
              <div class="nav-wrapper ">   

              <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="appartment" role="tabpanel" aria-labelledby="appartment-tab">
                  <div class="row">
                    <div class="col-lg-3">
                      <div class="info-table bg-light">
                        <ul>
                          <li> - <span>Function room</span></li>
                          <li> - <span>Gym</span></li>
                          <li> - <span>Jogging Path</span></li>
                          <li> - <span>Swimming Pool</span></li>
                          <li> - <span>Children's Pool</span></li>
                          <li> - <span>Open Lawn</span></li>
                          <li> - <span>Playroom </span></li>

                        </ul>

                      </div>
                    </div>
                    <div class="col-lg-6 mb-5">
                      <img src="{{ asset('assets/front/assets/images/amet_5.jpg')}}" alt="" class="mb-3">
                      <img src="{{ asset('assets/front/assets/images/amet_8.jpg')}}" alt="">
                    </div>
                    <div class="col-lg-3">
                      <h2 >Buyer's Guide:</h2><br>
                      <ul>
                          <li class="text-bold">
                            <span style="color:#000b8c;">Step 1 -</span>
                            Choose your unit
                            <!-- <p>lorem</p> -->
                         </li>
                          <li class="text-bold">
                            <span style="color:#000b8c;">Step 2 -</span>
                            Sign the reservation forms
                            <!-- <p>dfgdfdfg</p> -->
                         </li>
                          <li class="text-bold">
                            <span style="color:#000b8c;">Step 3 -</span>
                            Pay reservation fee
                            <!-- <p>dfgdfdfg</p> -->
                         </li>
                          <li class="text-bold">
                            <span style="color:#000b8c;">Step 4 -</span>
                            Submission of requirements
                            <p>Proof of paid reservation fee</p>
                            <p>Valid Government Id</p>
                            <p>TIN & BIR FORM</p>
                            <p>Proof of Income</p> <br>
                         </li>
                         <li class="text-bold">
                            <span style="color:#000b8c;">Step 5 -</span>
                            Downpayment and monthly Amortization
                            <p>After paying the reservation fee and complete requirements, 
                              We will be sending though email your Schedule of payment  (SOP) with due-dates and amounts. 
                            </p>
                         </li>
              
                        </ul>
                      <div class="icon-button">
                        <a href="#"><i class="fa fa-home"></i> Schedule a visit</a>
                      </div>
                      <div class="icon-button">
                        <a href="{{ route('reservation.form',$PropertyData->id)}}"><i class="fa fa-calendar"></i> Reservation form</a>
                      </div>
                    </div>
                  </div>
                </div>      
              </div>
              
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


@endsection