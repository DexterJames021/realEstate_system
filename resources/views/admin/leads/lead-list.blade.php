@extends('layouts.admin')
@section('content')
<div class="content-wrapper">
    <div class="col">
        <div class="card">
            <div class="card-body">
                <div class="mb-2">
                    <h2 class="card-title">Leads List</h2>
                </div>
                @if(session()->has('message'))
                    <div class="alert alert-success">
                        {{ session()->get('message') }}
                    </div>
                @endif
              
                <div class="table-responsive pt-3">
                <table class="table table-bordered">
                    <thead>
                        <tr class="bg-light">
                            <th class="card-description">#</th>
                            <th class="card-description">Fullname</th>
                            <th class="card-description">Email Address</th>
                            <th class="card-description">Contact number</th>
                            <th class="card-description">Valid id</th>  
                            <th class="card-description">Tin id</th>  
                            <th class="card-description">POI</th>  
                            <th class="card-description text-center">Update / Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($leadsData as $leadsCall)
                            <tr>
                                <td class="text-muted">{{$loop->iteration }}</td>
                                <td>{{$leadsCall->firstName.' '.$leadsCall->lastName}}</td>
                                <td>{{$leadsCall->email}}</td>
                                <td>{{$leadsCall->phone}}</td>
                                <td><img src="{{ asset($leadsCall->validId_image) }}" width="100%" height="100%"></td>
                                <td><img src="{{ asset($leadsCall->tax_image) }}" width="100%" height="100%"></td>
                                <td><img src="{{ asset($leadsCall->poi_image) }}" width="100%" height="100%"></td>
                                <td>
                                    <!-- <div class="btn p-0">
                                        <a href="{{ route('leads.show',$leadsCall->id) }}" >
                                            <button class="btn btn-info btn-sm m-2">
                                                <i class="mdi mdi-eye menu-icon"></i>
                                            </button>
                                        </a>
                                    </div> -->
                                    <div class="btn p-0">
                                        <a href="{{route('leads.edit',$leadsCall->id)}}" >
                                            <button class="btn btn-primary text-light btn-sm m-2">
                                                <i class="mdi mdi-lead-pencil  menu-icon"></i>
                                            </button>
                                        </a>
                                    </div>
                                    <div class="btn p-0">
                                    <a href="{{route('leads.destroy',$leadsCall->id)}}">
                                        <button class="btn btn-danger text-light btn-sm m-2">
                                            <i class="mdi mdi-delete menu-icon"></i>
                                        </button>
                                    </a>
                                    </div>
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