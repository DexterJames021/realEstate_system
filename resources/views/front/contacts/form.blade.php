@extends('layouts.contactMaster')
@section('title','Contact Us')
@section('content')
<div class="col-lg-6">
          <form id="contact-form" action="{{ route('contact-us.store')}}" method="post">
          @csrf
              <div class="row">
              <h5 class="contact-title contact-color mt-2">What are your details?</h5>
              <div class="col-lg-12">
                <fieldset>
                  <label for="name">First Name:</label>
                  <input type="text" name="firstName" id="firstName" placeholder="Your First Name..." autocomplete="on" required>
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <label for="name">Last Name:</label>
                  <input type="text" name="lastName" id="lastName" placeholder="Your Last Name..." autocomplete="on" required>
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <label for="email">Email Address:</label>
                  <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your Email..." required>
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <label for="subject">Mobile number:</label>
                  <input type="text" name="mobileNo" id="mobileNo"  placeholder="Your Mobile No#..." required>
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