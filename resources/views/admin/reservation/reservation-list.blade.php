@extends('layouts.admin')
@section('content')
    <div class="content-wrapper">
        <div class="col">
            <div class="card">
                <div class="card-body">
                        <h2 class="card-title">Reservation</h2>
                        <div class="table-responsive pt-3">
                        
                        <table class="table table-bordered">
                            <thead class="bg-light">
                                <tr>
                                    <th class="card-description">#</th>
                                    <th class="card-description">First name</th>
                                    <th class="card-description">Middle name</th>
                                    <th class="card-description">Last name</th>
                                    <th class="card-description">Email Address</th>
                                    <th class="card-description">Contact number</th>  
                                    <!-- <th class="card-description">validId_image</th>
                                    <th class="card-description">tax_image</th>
                                    <th class="card-description">poi_image</th> -->
                                    <th class="card-description">Monthly Income</th>
                                    <th class="card-description">Annual Payment</th>
                                    <th class="card-description">Payment Term</th>
                                    <th class="card-description">Amorti</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($reservationData as $reservationCall)
                                    <tr>
                                        <td class="text-muted">{{$loop->iteration }}</td>
                                        <td>{{$reservationCall->firstName}}</td>
                                        <td>{{$reservationCall->middleName}}</td>
                                        <td>{{$reservationCall->lastName}}</td>
                                        <td>{{$reservationCall->email}}</td>
                                        <td>{{$reservationCall->phone}}</td>
                                        <!-- <td>{{$reservationCall->validId_image}}</td>
                                        <td>{{$reservationCall->tax_image}}</td>
                                        <td>{{$reservationCall->poi_image}}</td> -->
                                        <td>{{number_format($reservationCall->monthlyIncome)}}</td>
                                        <td>{{$reservationCall->annualPayment}}</td>
                                        <td>{{$reservationCall->paymentTerm}} years</td>
                                        <td>value </td>
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