@extends('layouts.admin')
@section('content')

<div class="col-lg-10 my-5 mx-5">
<div class="card" style="width: 100%;">
            <img src="{{ asset($PropertyCall->coverImage)}}" class="card-img-top" alt="image" width="100%" height="100%">
            <div class="card-body text-center">
                <h5 class="card-title text-warning">{{$PropertyCall->residencialName}}</h5>
                <p class="card-description">Unit Type: <span  class="text-dark">{{$PropertyCall->unitType}}</span></p>
                <p class="card-description">Category: <span class="text-dark"> {{$PropertyCall->category}}</span></p>
                <p class="card-description">Total Prize: <span  class="text-dark">{{$PropertyCall->totalPrize}}</span></p>
                
            </div>
            <a href="{{ route('property')}}" class="btn btn-primary m-5 text-light">Back</a>
            </div>
</div>


@endsection