
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
          <a href="#details">
            <img src="{{ asset($PropertyCall->coverImage) }}" width= '200px' height='200px' class="img img-responsive" />
              </a>
              <span class="category" id="category">{{$PropertyCall->category}}</span>
              <h6 class="text-warning"><span class="text-dark">PHP </span>{{number_format($PropertyCall->totalPrize)}}</h6>
              <h4>
                <a href="#deatails">{{$PropertyCall->unitType}}
                  <span class="text-success">|</span>
                  <span >
                   <i class="mdi mdi-location text-dark"></i>
                  {{$PropertyCall->residencialName}}</span>
                </a>
              </h4>
                <ul>
                  <li><span>Property Details:</span></li> <br>
                  <li>Smart home ready!</li> <br>
                  <li>Pet Friendly</li> <br>
                  <li>Perfect for End Users</li> <br>
                  <li>Rental Business</li>
                </ul> 
              <div class="main-button">
                  <a href="{{ route('properties.details',$PropertyCall->id)}}" >For more details ...</a>
              </div>
            </div>
        </div>
        @endforeach
      </div>
    </div>
  </div>

  @endsection