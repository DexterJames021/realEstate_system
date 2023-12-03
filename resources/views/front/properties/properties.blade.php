@extends('layouts.properties')
@section('content')
<div class="section properties m-4">
      <div class="row">
      <div class="col-lg-4 offset-lg-4">
          <div class="section-heading text-center">
            <h2 class="m-2">Sierra Valley Garden's</h2>
            <h6 class="m-2 text-muted ">Your Smart Move in the east!</h6>
            <br>
            <h6>| Properties</h6>
          </div>
        </div>
      </div>

      <div class="row properties-box">

      @foreach($propertyData as $PropertyCall)
        <div class="col-lg-4 col-md-6 mb-30 properties-items col-md-6 adv">
          <div class="item">
          
            <img src="{{ asset($PropertyCall->coverImage) }}" width= '200px' height='200px' class="img img-responsive" />
              @if(($PropertyCall->category) == 'Sold')
                <span class="category text-light bg-danger" id="category" >{{$PropertyCall->category}}</span>
              @elseif(($PropertyCall->category) == 'Reserved')
                <span class="category text-light" id="category" style="background-color:#6f42c1 ;">{{$PropertyCall->category}}</span>
              @else(($PropertyCall->category) == 'Available')
                <span class="category text-light bg-warning" id="category" >{{$PropertyCall->category}}</span>
              @endif
              
              <h6 class="text-dark">
                <span class="text-muted">PHP </span>{{number_format($PropertyCall->totalPrize)}}
              </h6>
              <h4>
                <span>{{$PropertyCall->unitType}}
                  <span class="text-success">|</span>
                  <span >
                   <i class="mdi mdi-location text-dark"></i>
                  {{$PropertyCall->propertyName}}</span>
                  </span>
              </h4>
                <ul>
                  <li><span>Property Details:</span></li> <br>
                  <li>Smart home ready!</li> <br>
                  <li>Pet Friendly</li> <br>
                  <li>Perfect for End Users</li> <br>
                  <li>Rental Business</li>
                </ul> 

              @if(($PropertyCall->category) == 'Sold')
                <div class="main-button" id="detailsBtn mb-5">
                    <a href="{{ route('properties.details',$PropertyCall->id)}}" hidden>
                      <button class="btn text-light">For more details ...</button>
                    </a>
                </div>
              @else
                <div class="main-button" id="detailsBtn">
                    <a href="{{ route('properties.details',$PropertyCall->id)}}" >
                      <button class="btn text-light">For more details ...</button>
                    </a>
                </div>
              @endif
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </div>

  @endsection