@extends('layouts.admin')
@section('content')

<div class="content-wrapper">
            <div class="col">
                <div class="card">
                            <div class="card-body">
                            <h1 class="card-title">ADD LEADS</h1>
                        
                        @include('admin.alerts.success')
                        @include('admin.alerts.errors')

                        <form  method="post" action="{{ route('leads.store')}}">
                            <fieldset>
                            @csrf
                            <div class="mb-3">
                                <label class="form-label" for="name">Name: </label>
                                <input type="text" name="name" value="{{old('name')}}" placeholder="Name ..." class="form-control">
                                @error("name")
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="name">Email: </label>
                                <input type="email" name="email" value="{{old('email')}}" placeholder="Email ..." class="form-control">
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="name">Phone: </label>
                                <input type="text" name="phone" value="{{old('phone')}}" placeholder="Phone ..." class="form-control">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="name">Address: </label>
                                <textarea name="address" value="{{old('address')}}" placeholder="Address ..." class="form-control" cols="20" rows="5"></textarea>
                            </div>
                            <div class="mb-3" >
                                <button type="submit" class="btn btn-primary">  ADD  </button>

                            
                                <a href="{{ route('leads')}}"  class="btn btn-danger">
                                    <!-- <i class="icon-sm mdi mdi-arrow-left text-light"></i> -->
                                    BACK
                                </a>
                                
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</div>
@endsection