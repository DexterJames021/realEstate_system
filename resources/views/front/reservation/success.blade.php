@extends('layouts.successionMaster')
@section('content')

<div class="col-lg-7 ">
          <form id="contact-form" action="{{ route('contact-us.store')}}"  method="post">
          @csrf
          @method('POST')
              <div class="row">
              <h5 class="contact-title text-success mt-2">Reservation confirmed! Kindly await our email. Thanks! </h5>
              <p class="text-muted ">Please wait for an email with Schedule of Payment (SOP) this SOP is not accurate wait for our agent to send the original-SOP :  
               <ul class="text-muted mb-0">
                <li>Id: {{$reservationData->id}}</li>
                <li>Fullname: {{$reservationData->firstName.' '.$reservationData->lastName}}</li>
                <li>Email: {{$reservationData->email}}</li>
                <li class="mt-3"><h1>Priliminary Reservation form </h1></li>
                <li><small class="text-muted">This SOP is not Final</small></li>
                
                @if($reservationData->paymentTerm == 'DP 20% 6-Months')
                  <li>Downpayment Total: {{ $downpaymentTotal = $PassingData  * 0.20}}</li>
                  <li>Monthly-total: {{abs($monthlyTotal = $downpaymentTotal - $PassingData)}}</li>
                  <li>monthly payment: {{number_format(abs($monthlyTotal / 6))}}</li>

                @elseif($reservationData->paymentTerm == 'Spot DP 10%-10% 6-Months')
                  <li>Downpayment Total: {{ $downpaymentTotal = $PassingData  * 0.20}}</li>
                  <li>Monthly-total: {{abs($monthlyTotal = $downpaymentTotal - $PassingData)}}</li>
                  <li>monthly payment: {{number_format(abs($monthlyTotal / 6))}}</li>

                @elseif($reservationData->paymentTerm == 'Spot DP 10%-10% 12-Months')
                  <li>Downpayment Total: {{ $downpaymentTotal = $PassingData  * 0.20}}</li>
                  <li>Monthly-total: {{abs($monthlyTotal = $downpaymentTotal - $PassingData)}}</li>
                  <li>monthly payment: {{number_format(abs($monthlyTotal / 12))}}</li>

                @elseif($reservationData->paymentTerm == 'DP 20% 18-Months')
                  <li>Downpayment Total: {{ $downpaymentTotal = $PassingData  * 0.20}}</li>
                  <li>Monthly-total: {{abs($monthlyTotal = $downpaymentTotal - $PassingData)}}</li>
                  <li>monthly payment: {{number_format(abs($monthlyTotal / 18))}}</li>

                @elseif($reservationData->paymentTerm == 'Spot DP 10%-10% 18-Months')
                  <li>Downpayment Total: {{ $downpaymentTotal = $PassingData  * 0.20}}</li>
                  <li>Monthly-total: {{abs($monthlyTotal = $downpaymentTotal - $PassingData)}}</li>
                  <li>monthly payment: {{number_format(abs($monthlyTotal / 18))}}</li>
                @endif
               </ul>
               <div>
                
                </div>
              <!-- <a href="{{route('get.pdf',$reservationData->id)}}" class="btn btn-success text-light mb-3">Get SOP</a> -->
              <div>
                <button type="button" onclick="window.print()" class="bg-success"> Print  </button>
              </div>
              <a href="{{route('contact-us')}}" class="btn btn-warning text-light mt-2">Contact Us</a>
              
              <!-- $reservationData['id' => $reservationData->id] -->
              
            </div>
          </form>
        </div>

        <div class="col-lg-5 mt-5 ">
          <div class="row">
            <div class="col-lg-12">
              <div class="item phone">
                <img src="{{ asset('assets/front/assets/images/invert/yellows/phone-icon-yellow.png')}}" alt="icon" style="max-width: 52px;">
                <h6>010-020-5678<br><span>Phone Number</span></h6>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="item email">
                <img src="{{ asset('assets/front/assets/images/invert/yellows/email-icon-yellow.png')}}" alt="icon" style="max-width: 52px;">
                <h6>RLC@residences<br><span>Business Email</span></h6>
              </div>
            </div>
          </div>
        </div>
@endsection














