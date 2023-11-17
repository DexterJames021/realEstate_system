@extends('layouts.auth')
@section('title','Login')
@section('content')
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-center py-5 px-4 px-sm-5">
              <div class="brand-logo">
              <a href="{{ route('index')}}">
                <img src="{{ asset('../assets/front/assets/images/rlc_logo.png')}}" alt="logo">
              </a>
              </div>
              <h4 >Hello! let's get started</h4>
              <h6 class="font-weight-light text-muted">Sign in to continue.</h6>
              <form method="post" action="{{ route('login.action')}}" class="pt-3">
                @csrf
                  @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                  @endif
                <div class="form">
                  <label for="email" class="">Email: </label>
                  <input type="email" name="email" value="{{ old('email')}}" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Email ...">
                </div>
                <div class="form-label">
                  <label for="password" class="">Password: </label>
                  <input type="password" name="password" value="{{ old('password')}}" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password ...">
                </div>
                <div class="mt-3">
                  <button class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">SIGN IN</button>
                </div>
                <div class="my-2 d-flex justify-content-between align-items-center">
                  <div class="form-check">
                    <label class="form-check-label text-muted">
                      <input type="checkbox" class="form-check-input">
                      Keep me signed in
                    </label>
                  </div>
                  <a  class="auth-link text-black">Forgot password?</a>
                </div>
                <div class="text-center mt-4 font-weight-light">
                  Don't have an account? <a href="{{ route('register') }}" class="text-primary">test Create</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
@endsection