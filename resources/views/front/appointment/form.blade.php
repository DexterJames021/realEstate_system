@extends('layouts.appointment')
@section('title','Appointment')
@section('content')
<div class="col-lg-6">
          <form id="contact-form" action="{{ route('appointment.store')}}" method="post">
          @csrf
              <div class="row">
                <h5 class="contact-title contact-color">
                 When are you Available?
                </h5>
              <div class="col-lg-12">
                <fieldset>
                  <label for="subject">Set an Appointment Date: </label>
                  <input type="date" name="date" id="date"  value="" required>
                </fieldset>
              </div>
              <div  class="col-lg-12">
                <fieldset>
                  <label for="">Preferred Time Slot: </label>
                    <select name="timeSlot" id="">
                      <option value="*">--- Select time slot ---</option>
                      <option value="8am-9am">8am - 9am</option>
                      <option value="9am-10am">9am - 10am</option>
                      <option value="10pm-11pm">10pm - 11pm</option>
                      <option value="1pm-2pm">1pm - 2pm</option>
                    </select>
                </fieldset>
              </div>
              <h5 class="contact-title contact-color mt-2">
                What Property your Interested in?
              </h5>
              <div  class="col-lg-12">
                <fieldset>
                  <label for="">Property: </label>
                    <select name="property" id="">
                      <option value="">--- Select Property ---</option>
                      <option value="property1">1</option>
                      <option value="property2">2</option>
                      <option value="property3">3</option>
                      <option value="property4">4</option>
                    </select>
                </fieldset>
              </div>
              <h5 class="contact-title contact-color mt-2">
                What are your details?
              </h5>
              <div class="col-lg-12">
                <fieldset>
                  <label for="name">First Name:</label>
                  <input type="text" name="firstName" id="name" placeholder="Your First Name..." autocomplete="on" required>
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <label for="name">Last Name:</label>
                  <input type="text" name="lastName" id="name" placeholder="Your Last Name..." autocomplete="on" required>
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
                  <input type="text" name="mobileNo" id="email"  placeholder="Your Mobile No#..." required>
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