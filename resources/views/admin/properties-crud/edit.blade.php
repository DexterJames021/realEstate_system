@extends('layouts.admin')
@section('content')
    <div class="content-wrapper">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title">EDIT PROPERTIES</h3>

                    <form enctype='multipart/form-data' method="post" action="{{ route('property.update',$PropertyCall->id)}}">
                        <fieldset>
                        @csrf
                        <div class="mb-3 mt-3">
                            <img src="{{ asset($PropertyCall->coverImage) }}" width= '20%' height='20%' class="img img-responsive mb-2" />
                            <br><label class="card-description " for="" >Choose Cover Image: </label>
                            <input type="file" name="coverImage" placeholder="Cover Image ..." class="form-control">
                        </div>
                        <div class="mb-3">
                            <label class="card-description " for="" >Residencial Name: </label>
                            <input type="text" name="residencialName" value="{{$PropertyCall->residencialName}}" placeholder="Residencial Name ..." class="form-control">
                        </div>
                        <div class="mb-3">
                            <label class="card-description " for="unitType" >Unit Type: </label>
                            <select name="unitType" id="unitType"  value="{{old('unitType')}}" class="form-control">
                                <option value="{{ $PropertyCall->unitType}}" @if(old('type',$PropertyCall) === '1-Bedroom unit')'selected' @endif>1 Bedroom unit</option>
                                <option value="{{ $PropertyCall->unitType}}" @if(old('type',$PropertyCall) === '2-Bedroom unit')'selected' @endif>2 Bedroom unit</option>
                                <option value="{{ $PropertyCall->unitType}}" @if(old('type',$PropertyCall) === '3-Bedroom unit')'selected' @endif>3 Bedroom unit</option>
                                <option value="{{ $PropertyCall->unitType}}" @if(old('type',$PropertyCall) === 'Studio-type unit')'selected' @endif>Studio type unit</option>
                                <option value="{{ $PropertyCall->unitType}}" @if(old('type',$PropertyCall) === 'Pent-house unit')'selected' @endif>Pent-house unit</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="card-description " for="category" >Category: </label>
                            <select name="category" id="category"  value="{{old('category')}}" class="form-control">
                                <option value="{{ $PropertyCall->category}}" @if(old('type',$PropertyCall) === 'Sold') 'selected' @endif>Sold</option>
                                <option value="{{ $PropertyCall->category}}" @if(old('type',$PropertyCall) === 'Reserved') 'selected' @endif>Reserved</option>
                                <option value="{{ $PropertyCall->category}}" @if(old('type',$PropertyCall) === 'Available') 'selected' @endif>Available</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="card-description " for="" >Total Prize: </label>
                            <input name="totalPrize" value="{{ $PropertyCall->totalPrize}}" placeholder="Total Prize ..." class="form-control" >
                        </div>
                        <div class="mb-3" >
                            <button type="submit" class="btn btn-primary text-light">  Confirm  </button>
                        </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection