@extends('layouts.admin')
@section('content')
<div class="content-wrapper ">
    <div class="col">
        <div class="card">
            <div class="card-body">
                <h2 class="card-title">Contacts</h2>
                    <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead class="bg-light">
                            <tr>
                                <th class="card-description">#</th>
                                <th class="card-description">First name</th>
                                <th class="card-description">Last name</th>
                                <th class="card-description">Email Address</th>
                                <th class="card-description">Message</th>  
                                <th class="card-description">Mail back</th>  
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $ContactData)
                                <tr>
                                    <td class="text-muted">{{$loop->iteration }}</td>
                                    <td>{{$ContactData->firstName}}</td>
                                    <td>{{$ContactData->lastName}}</td>
                                    <td>{{$ContactData->email}}</td>
                                    <td>{{($ContactData->message)}}</td>
                                    <td>
                                        <a href="">  
                                            <button class="btn btn-success text-light">Message</button>
                                        </a>
                                    </td>
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