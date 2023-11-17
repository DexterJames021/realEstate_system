@extends('layouts.successionMaster')
@section('content')

<div class="col-lg-7 ">
          <form id="contact-form" action="{{ route('contact-us.store')}}" method="post">
          @csrf
              <div class="row">
              <h5 class="contact-title text-success mt-2">Success Reservation </h5>
              <p class="text-muted ">Wait for Email message with Schedule of Payment (SOP) and proceed for 
              the downpayment via:  
               <ul class="text-muted mt-0">
                <li>- bank</li>
                <li>- credit card</li>
                <li>- cheque</li>
                
               </ul>

              <br><br><span class="mt-2">have Good a day.</span></p>
              
              
              <a href="{{route('make.pdf')}}" class="btn btn-success text-light mb-3">get SOP</a>
              <a href="{{route('contact-us')}}" class="btn btn-warning text-light">Contact Us</a>
              <!-- $reservationData['id' => $reservationData->id] -->
              
            </div>
          </form>
        </div>

        <div class="col-lg-5 mt-5 ">
          <div class="row">
            <div class="col-lg-12">
              <div class="item phone">
                <img src="{{ asset('assets/front/assets/images/invert/yellows/phone-icon-yellow.png')}}" alt="" style="max-width: 52px;">
                <h6>010-020-5678<br><span>Phone Number</span></h6>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="item email">
                <img src="{{ asset('assets/front/assets/images/invert/yellows/email-icon-yellow.png')}}" alt="" style="max-width: 52px;">
                <h6>RLC@residences<br><span>Business Email</span></h6>
              </div>
            </div>
          </div>
        </div>
@endsection














