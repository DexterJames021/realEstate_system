@extends('layouts.admin')
@section('content')

<div class="content-wrapper">
    <div class="col">
        <div class="card">
                
                <div class="card-body">
                <h3 class="card-title">Edit Info</h3>
                    <form action="{{ route('leads.update',$leadsCall-> id)}}" method="post">
                    @csrf
                    @method('post')
                        <div class="mt-3">
                            <label for="name" class="card-description">Name:  </label>
                            <input type="text" name="name" value="{{$leadsCall-> name}}"  placeholder="Name ..." class="form-control">
                        </div>
                        <div class="mt-3">
                            <label for="email" class="card-description">Email:  </label>
                            <input type="text"  name="email" value="{{$leadsCall-> email}}" placeholder="Email ..."  class="form-control">
                        </div>
                        <div class="mt-3">
                            <label for="phone" class="card-description">Phone:  </label>
                            <input type="text"  name="phone" value="{{$leadsCall-> phone}}" placeholder="Phone ..."  class="form-control">
                        </div>
                        <div class="mt-3">
                            <label for="address" class="card-description">Address:  </label>
                            <input type="text" name="address" value="{{$leadsCall-> address}}"  placeholder="Address ..." class="form-control">
                        </div>
                        <div class="mt-3">
                                <button type="submit"  value="update" class="btn btn-success" >
                                    <a href="{{ route('leads.update',$leadsCall-> id) }}" class="text-light text-decoration-none">EDIT</a>
                                </button>
                            <a href="{{ route('leads')}}" class="btn btn-light"><i class=" mdi mdi-keyboard-return"></i>BACK</a>
                        </div>

                    </form>
                </div>
        </div>
    </div>

</div>
@endsection