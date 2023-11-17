@extends('layouts.reservationMaster')
@section('content')

<div class="contact-page section mt-5 ">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 ">
        <div class="section-heading mx-lg-5">
            
        </div>
        <div class="section-body">
        <div class="col-lg-12">                                 
          <form id="contact-form" action="{{route('reservation.store',$reservationData->id)}}" method="post" enctype="multipart/form-data">
          @csrf
          @method('post')

                <div class="row">
                    <h6 class="text-center mb-5" style="color: #b5be34;">| Reservation form </h6>
                </div>
                <div class="row">
                        
                        <div class="col">
                            <img src="{{ asset($reservationData->coverImage)}}" alt="">
                        </div>
                        <div class="col">
                            <h5 class=" mb-1">Reservation for:</h5>
                            <small>
                                <ul class="text-muted">
                                    <li class="text-left mt-3">Residencial Id: <span class="fw-bold">{{$reservationData->id}}</span></li>
                                    <li class="text-left">Residencial name: <span class="fw-bold">{{$reservationData->residencialName}}</span></li>
                                    <li class="text-left">Unit type:  <span class="fw-bold">{{$reservationData->unitType}}</span></li>
                                    <li class="text-left">Price of condo unit: <span class="fw-bold">{{$reservationData->totalPrize}}</span></li>
                                </ul>
                            </small>
                            <small>
                            <ul class="text-muted mt-3">
                                <li class="text-dark"><h6>With Amenities:</h6></li>
                                <li>Function room</li>
                                <li>Gym</li>
                                <li>Jogging Path</li>
                                <li>Swimming Pool</li>
                                <li>Children's Pool</li>
                                <li>Open Lawn</li>
                                <li>Playroom </li>
                            </ul>  
                            </small>   
                          
                        </div>
                </div>
            <div class="row">
                <h5 class="contact-title contact-color my-4">What are your details?</h5>

                <div class="col-lg-12  d-lg-flex">
                    <div class="col-lg-4 col-sm-12 p-2">
                    <fieldset>
                        <label for="name">First-name</label>
                        <input type="text" name="firstName" id="firstName" placeholder="Your First Name..." autocomplete="on" required>       
                   </fieldset>
                    </div>
                    <div class="col-lg-4 col-sm-12  p-2">
                    <fieldset>
                        <label for="name">Middle-name:</label>
                        <input type="text" name="middleName" id="middleName" placeholder="Your Middle Name..." autocomplete="on" required>
                        </fieldset>
                    </div>
                    
                    <div class="col-lg-4 col-sm-12  p-2">
                    <fieldset>
                        <label for="name">Last-name:</label>
                        <input type="text" name="lastName" id="lastName" placeholder="Your Last Name..." autocomplete="on" required>
                        </fieldset>
                    </div>

                </div>
                <div class="col-lg-12">
                    <fieldset>
                        <label for="email">Email Address:</label>
                        <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your Email..." required>
                    </fieldset>
                </div>
                <div class="col-lg-12 d-flex">
                    <div class="col p-3">
                        <fieldset>
                            <label for="subject">Mobile number:</label>
                            <input type="number" name="phone" id="phone"  placeholder="Your Mobile No#..." required>
                        </fieldset>
                    </div>
                    <!-- gender -->
                    <!-- <div class="row ">
                        <label for="">Gender:</label>
                        <div class="col-lg-6 d-flex p-3 mx-5">
                        <fieldset class="">
                            <label for="">Female:</label>
                            <input type="radio" name="mobileNo" value="female" class="radio" id="gender" placeholder="Your Mobile No#..." required>
                        </fieldset class="">
                        <fieldset>
                            <label for="">Male:</label>
                            <input type="radio" name="mobileNo" value="male" class="radio" id="gender"  placeholder="Your Mobile No#..." required>
                        </fieldset>
                        </div>
                    </div> -->
                </div>
                <div class="row">
                <h5 class="contact-title contact-color my-4">Requirements:</h5>
                <div class="col-12">
                    <fieldset>
                        <label class="form-label card-description" for="" >Valid Goverment Id: </label>
                        <input type="file" name="validId_image" id="" class="form-control">  <br>
                        
                        <label class="form-label card-description" for="" >TIN or BIR:</label>
                        <input type="file" name="tax_image" id="" class="form-control"> <br>

                        <label class="form-label card-description" for="" >Proof of income:</label>
                        <input type="file" name="poi_image" id="" class="form-control"> <br>
                    </fieldset>
                </div>
                </div>
                <div class="row">
                    <h5 class="contact-title contact-color my-4">Payment method</h5>
                    <div class="col-lg-12">
                        <fieldset>
                            <label for="monthlyIncome">Monthly net income:</label>
                            <input type="number" name="monthlyIncome" id="monthlyIncome"placeholder="Your monthly Income..." required>
                        </fieldset>
                    </div>
                    <div class="col-lg-12">
                    <fieldset>
                        <label class="form-label card-description" for="annualPayment" >Annual Payment: </label>
                        <select name="annualPayment" id="annualPayment"  class="form-control">
                            <option selected disabled hidden> --- Select Annual Payment ---</option>
                            <option value="0.10">10% Annually</option>
                            <option value="0.15">15% Annually</option>
                            <option value="0.20">20% Annually</option>
                            <option value="0.25">25% Annually</option>
                            <option value="0.30">30% Annually</option>
                            <option value="0.35">35% Annually</option>
                            <option value="0.40">40% Annually</option>
                        </select>
                    </fieldset>
                    </div>
                    <div class="col-lg-12">
                    <fieldset>
                        <label class="form-label card-description" for="paymentTerm" >Payment Term (year) : </label>
                        <select name="paymentTerm" id="paymentTerm"  class="form-control">
                            <option selected disabled hidden> --- Select payment term ---</option>
                            <option value="1">1 year</option>
                            <option value="2">2 year</option>
                            <option value="3">3 year</option>
                            <option value="4">4 year</option>
                            <option value="5">6 year</option>
                            <option value="7">7 year</option>
                            <option value="8">8 year</option>
                            <option value="9">9 year</option>
                            <option value="10">10 year</option>
                        </select>
                    </fieldset>
                    </div>
                </div>

                <!-- button -->
                <div class="col-lg-12">
                    <fieldset>
                    <button type="submit" ">Submit</button>
                        <!-- onclick="window.print() -->
                        <!-- <button type="submit">Send Message</button> -->
                        <small class="text-muted text-center">Proceed to confirmation to double check your info</small>
                    </fieldset>



                </div>
             
            </div>
          </form>
        </div>
        </div>
        </div>
      </div>
    </div>
  </div>
@endsection














