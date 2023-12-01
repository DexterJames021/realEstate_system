@extends('layouts.admin')
@section('content')
    <div class="content-wrapper">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title">Property-list</h2>
                    <a href="{{ route('property.add')}}" class="btn btn-primary text-light my-2">ADD NEW PROPERTY</a>
                @if(session()->has('message'))
                <div class="alert alert-success">{{session()->get('message')}}</div>
                @endif

                    <div class="table-responsive pt-3">
                    <table class="table table-bordered">
                        <thead class="bg-light">
                            <tr> 
                                <th class="card-description ">#</th>
                                <th class="card-description">Cover Image</th>
                                <th class="card-description">Residencial name/Block & lot</th>
                                <th class="card-description">Unit Type</th>
                                <th class="card-description">Category</th>
                                <th class="card-description">Price</th>  
                                <th class="card-description text-center">Action</th>  
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($propertyData as $PropertyCall)
                                <tr>
                                    <td class="text-muted">{{$loop->iteration }}</td>
                                    <td>
                                    <img src="{{ asset($PropertyCall->coverImage) }}" width= '100%' height='100%' class="" />
                                    </td>
                                    <td>{{$PropertyCall->propertyName}}</td>
                                    <td>{{$PropertyCall->unitType}}</td>
                                    <td>{{$PropertyCall->category}}</td>
                                    <td>{{number_format($PropertyCall->totalPrize)}}</td>
                                    <td>
                                        <div class="btn p-0">
                                            <a href="{{ route('property.show',$PropertyCall->id)}}" class="" >
                                                <!-- view -->
                                                <button class="btn btn-info btn-sm m-2"><i class="mdi mdi-eye menu-icon"></i></button>
                                            </a>
                                        </div>
                                        <div class="btn p-0">
                                            <a href="{{ route('property.edit',$PropertyCall->id)}}" class="" >
                                                <!-- edit -->
                                                <button class="btn btn-primary text-light btn-sm m-2"><i class="mdi mdi-update menu-icon"></i></button>
                                            </a>
                                        </div>
                                        <div class="btn p-0">
                                            <a href="{{ route('property.destroy',$PropertyCall->id)}}" class="" >
                                                <!-- delete -->
                                                <button class="btn btn-danger text-light btn-sm m-2"><i class="mdi mdi-delete menu-icon"></i></button>
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