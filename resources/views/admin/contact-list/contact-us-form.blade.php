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
                                <th class="card-description">first</th>
                                <th class="card-description">last</th>
                                <th class="card-description">email</th>
                                <th class="card-description">phone</th>  
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $ContactData)
                                <tr>
                                    <td class="text-muted">{{$loop->iteration }}</td>
                                    <td>{{$ContactData->firstName}}</td>
                                    <td>{{$ContactData->lastName}}</td>
                                    <td>{{$ContactData->email}}</td>
                                    <td>{{$ContactData->mobileNo}}</td>
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