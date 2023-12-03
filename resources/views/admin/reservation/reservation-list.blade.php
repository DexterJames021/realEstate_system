@extends('layouts.admin')
@section('content')
    <div class="content-wrapper">
        <div class="col">
            <div class="card">
                <div class="card-body">
                        <h2 class="card-title">Reservation-list / Buyer</h2>
                        <div class="table-responsive pt-3">
                        
                        <table class="table table-bordered" >
                            <thead class="bg-light">
                                <tr>
                                    <th class="card-description">#</th>
                                    <th class="card-description">Buyer name</th>
                                    <th class="card-description">Email</th>
                                    <th class="card-description">Contact number</th>
                                    <!-- <th class="card-description">Valid ID</th>
                                    <th class="card-description">Tin id</th>
                                    <th class="card-description">POI</th> -->
                                    <th class="card-description">Payment Term</th>
                                    <!-- <th class="card-description">Action</th> -->
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($reservationData as $reservationCall)
                                    <tr>
                                        <td class="text-muted">{{$loop->iteration }}</td>
                                        <td>{{$reservationCall->firstName.' '.$reservationCall->lastName}}</td>
                                        <td>{{$reservationCall->email}}</td>
                                        <td>{{$reservationCall->phone}}</td>
                                        <!-- <td>
                                            <img src="{{ asset($reservationCall->validId_image) }}" width= '100%' height='100%' class="" />
                                        </td>
                                        <td>
                                            <img src="{{ asset($reservationCall->tax_image) }}" width= '100%' height='100%' class="" />
                                        </td>
                                        <td>
                                            <img src="{{ asset($reservationCall->poi_image) }}" width= '100%' height='100%' class="" />
                                        </td> -->
                                            <td>{{$reservationCall->paymentTerm}}</td>
                                        <!-- <td>
                                          
                                        </td> -->
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