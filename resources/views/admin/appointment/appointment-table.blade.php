@extends('layouts.admin')
@section('content')
    <div class="content-wrapper">
        <div class="col">
            <div class="card">
                <div class="card-body">
                        <h2 class="card-title">Appointments</h2>
                        <div class="table-responsive pt-3">
                        
                        <table class="table table-bordered">
                            <thead class="bg-light">
                                <tr>
                                    <th class="card-description">#</th>
                                    <th class="card-description">First name</th>
                                    <th class="card-description">Last name</th>
                                    <th class="card-description">Email</th>
                                    <th class="card-description">Phone</th>  
                                    <th class="card-description">Date</th>
                                    <th class="card-description">Time Slot</th>
                                    <th class="card-description">Property</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data as $appointments)
                                    <tr>
                                        <td class="text-muted">{{$loop->iteration }}</td>
                                        <td>{{$appointments->firstName}}</td>
                                        <td>{{$appointments->lastName}}</td>
                                        <td>{{$appointments->email}}</td>
                                        <td>{{$appointments->mobileNo}}</td>
                                        <td>{{$appointments->date}}</td>
                                        <td>{{$appointments->timeSlot}}</td>
                                        <td>{{$appointments->property}}</td>
                                    </tr>
                                @endforeach    
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection