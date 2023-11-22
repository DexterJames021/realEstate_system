@extends('layouts.appointment')
@section('title','Appointment')
@section('content')
<div class="col-lg-6">
          <form id="contact-form" action="{{ route('appointment.store')}}" method="post">
          @csrf

          @if(session()->has('success'))
              <div class="alert alert-success">{{session()->get('success')}}</div>
          @endif

              <div class="row">
                <h5 class="contact-title contact-color">
                 When are you Available?
                </h5>
              <div class="col-lg-12">
                <fieldset>
                  <label for="subject">Set an Appointment Date: </label>
                  <input type="date" name="date" id="date"  value="{{ old('date', date('mm-dd-yyyy')) }}" >
                </fieldset>
                @error('date')
                  <small><div class="text-danger mb-2">{{$message}}</div></small>
                @enderror
              </div>
              <div  class="col-lg-12">
                <fieldset>
                  <label for="">Agent Preferred Time Slot: </label>
                    <select name="timeSlot" id="">
                      <option disabled selected hidden >--- Select time slot ---</option>
                      <option value="8am-9am"   {{ old('timeSlot') == '8am - 9am'? "selected" : "" }}>8am - 9am</option>
                      <option value="9am-10am"  {{ old('timeSlot') == '9am - 10am'? "selected" : "" }}>9am - 10am</option>
                      <option value="10pm-11pm" {{ old('timeSlot') == '10pm - 11pm'? "selected" : "" }}>10pm - 11pm</option>
                      <option value="1pm-2pm"   {{ old('timeSlot') == '1pm - 2pm'? "selected" : "" }}>1pm - 2pm</option>
                    </select>
                  @error('timeSlot')
                    <small><div class="text-danger mb-2">{{$message}}</div></small>
                  @enderror
                </fieldset>
              </div>
              <h5 class="contact-title contact-color mt-2">
                What Property your Interested in?
              </h5>
              <div  class="col-lg-12">
                <fieldset>
                  <label for="">Property: </label>
                    <select name="property" id="">
                      <option disabled selected hidden>--- Select Property ---</option>
                      <option {{old('property') == '1-Bedroom unit'? '' : ''}} value="1-Bedroom unit">1-Bedroom unit</option>
                      <option {{old('property') == '2-Bedroom unit'? '' : ''}} value="2-Bedroom unit">2-Bedroom unit</option>
                      <option {{old('property') == '3-Bedroom unit'? '' : ''}} value="3-Bedroom unit">3-Bedroom unit</option>
                      <option {{old('property') == 'Studio type unit'? '' : ''}} value="Studio type unit">Studio type unit</option>
                      <option {{old('property') == 'Pent-house unit'? '' : ''}} value="Pent-house unit">Pent-house unit</option>
                      <option {{old('property') == 'Other...'? '' : ''}} value="Pent-house unit">Other...</option>
                    </select>
                  @error('property')
                    <small><div class="text-danger mb-2">{{$message}}</div></small>
                  @enderror
                </fieldset>
              </div>
              <h5 class="contact-title contact-color mt-2">
                What are your details?
              </h5>
              <div class="col-lg-12">
                <fieldset>
                  <label for="name">First Name:</label>
                  <input type="text" name="firstName" id="name" placeholder="Your First Name..." autocomplete="on" value="{{old('firstName')}}">
                  @error('firstName')
                    <small><div class="text-danger mb-2">{{$message}}</div></small>
                  @enderror
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <label for="name">Last Name:</label>
                  <input type="text" name="lastName" id="name" placeholder="Your Last Name..." autocomplete="on" value="{{old('lastName')}}">
                  @error('lastName')
                    <small><div class="text-danger mb-2">{{$message}}</div></small>
                  @enderror
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <label for="email">Email Address:</label>
                  <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your Email..." value="{{old('email')}}">
                  @error('email')
                    <small><div class="text-danger mb-2">{{$message}}</div></small>
                  @enderror
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <label for="subject">Mobile number:</label>
                  <input type="text" name="mobileNo" id="email"  placeholder="+63"  value="{{old('mobileNo')}}">
                  @error('mobileNo')
                    <small><div class="text-danger mb-2">{{$message}}</div></small>
                  @enderror
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <button type="submit" id="form-submit" class="orange-button">Send Message</button>
                  <small class="text-muted mx-5">Be sure to enter a valid address and
                     mobile number</small>
                </fieldset>
              </div>
            </div>
          </form>
        </div>
@endsection