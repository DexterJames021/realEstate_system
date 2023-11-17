@extends('layouts.auth')
@section('title','Register')
@section('content')
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo">
                  <a href="{{ route('index')}}">
                    <img src="{{ asset('../assets/front/assets/images/rlc_logo.png')}}" alt="logo">
                  </a>
              </div>
              <h4>For testing purpose only</h4>

                <form method="POST" action="{{ route('register.save')}}" class="pt-3">
                @csrf
                <div class="form-group">
                  <input type="text" class="form-control form-control-lg" id="name" value="{{ old('name')}}" name="name" placeholder="Username ...">
                </div>
                <div class="form-group">
                  <input type="email" class="form-control form-control-lg" id="email" value="{{ old('email')}}" name="email" placeholder="Email ...">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-lg" id="password" value="{{ old('password')}}" name="password" placeholder="Password ...">
                </div>
                <div class="mb-4">
                  <div class="form-check">
                    <label class="form-check-label text-muted">
                      <input type="checkbox" class="form-check-input">
                      I agree to all Terms & Conditions
                    </label>
                  </div>
                </div>
                <div class="mt-3">
                  <button class="btn btn-primary btn-lg font-weight-medium auth-form-btn">
                    SIGN UP</button>
                </div>
                <div class="text-center mt-4 font-weight-light">
                  Already have an account? <a href="{{ route('login') }}" class="text-primary">Login</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

@endsection