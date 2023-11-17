@extends('layouts.admin')
@section('content')

<div class="content-wrapper">
    <div class="col">
        <div class="card">
            <div class="card-body ">
                <div class="card-title">Leads Info</div>
                <div class="col">
                    <p class="card-description">Id: <span>{{$leadsCall->id}}</span></p>
                    <p class="card-description">Name: <span>{{$leadsCall->name}}</span></p>
                    <p class="card-description">Email: <span>{{$leadsCall->email}}</span></p>
                    <p class="card-description">Phone: <span>{{$leadsCall->phone}}</span></p>
                    <p class="card-description">Address: <span>{{$leadsCall->address}}</span></p>
                </div>
                
                <a href="{{ route('leads')}}" class="btn btn-danger mt-3">Back</a>

            </div>
        </div>
    </div>
</div>
@endsection