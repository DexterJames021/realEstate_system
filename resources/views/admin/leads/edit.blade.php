@extends('layouts.admin')
@section('content')

<div class="content-wrapper">
    <div class="col">
        <div class="card">
                <div class="card-body">
                <h3 class="card-title">Edit Info</h3>


                    <form action="{{ route('leads.update',$leadsCall-> id)}}" method="post" enctype='multipart/form-data'>
                    @csrf
                    @method('post')
                        <div class="mt-3">
                            <label for="name" class="card-description">Name:  </label>
                            <input type="text" name="name" value="{{$leadsCall-> name}}"  placeholder="Name ..." class="form-control" required>
                    @error('name')
                        <div class="text-danger">{{$message}}</div>
                    @enderror
                        </div>
                        <div class="mt-3">
                            <label for="email" class="card-description">Email Address:  </label>
                            <input type="text"  name="email" value="{{$leadsCall-> email}}" placeholder="Email ..."  class="form-control" required>
                    @error('email')
                        <div class="text-danger">{{$message}}</div>
                    @enderror
                        </div>
                        <div class="mt-3">
                            <label for="phone" class="card-description">Contact Number:  </label>
                            <input type="text"  name="phone" value="{{$leadsCall-> phone}}" placeholder="Contact Number ..."  class="form-control" required>
                    @error('phone')
                        <div class="text-danger">{{$message}}</div>
                    @enderror    
                        </div>
                        <div class="mt-3">
                            <label for="address" class="card-description">Address:  </label>
                            <input type="text" name="address" value="{{$leadsCall-> address}}"  placeholder="Address ..." class="form-control" required>
                    @error('address')
                        <div class="text-danger">{{$message}}</div>
                    @enderror
                        </div>
                        <div class="mt-3">
                        <!-- <a href="{ { rou te ('leads.update',$ leadsCal l-> id ) } }" class="text-light text-decoration-none">EDIT</a> -->
                            <button type="submit" class="btn btn-success text-white" >Edit</button>
                            <a href="{{ route('leads')}}" class="btn btn-light">Back</a>
                        </div>
                    </form>
                </div>
        </div>
    </div>

</div>
@endsection