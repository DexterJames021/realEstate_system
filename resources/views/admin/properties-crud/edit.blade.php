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
                        @error('coverImage')
                            <small><div class="text-danger">{{$message}}</div></small>
                        @enderror
                        </div>
                        <div class="mb-3 mt-3">
                            <label class="card-description " for="" >Residencial Name: </label>
                            <input type="text" name="residencialName" value="{{$PropertyCall->residencialName}}" placeholder="Residencial Name ..." class="form-control">
                        @error('residencialName')
                            <small><div class="text-danger">{{$message}}</div></small>
                        @enderror
                        </div>
                        <div class="mb-3 mt-3">
                            <label class="card-description " for="unitType" >Unit Type: </label>
                            <select name="unitType" id="unitType"  value="{{old('unitType')}}" class="form-control">
                                <option value="1-Bedroom unit"   {{ ($PropertyCall->unitType === '1-Bedroom unit') ? 'selected' : ''   }}>1-Bedroom unit</option>
                                <option value="2-Bedroom unit"   {{ ($PropertyCall->unitType === '2-Bedroom unit') ? 'selected' : ''   }}>2-Bedroom unit</option>
                                <option value="3-Bedroom unit"   {{ ($PropertyCall->unitType === '3-Bedroom unit') ? 'selected' : ''   }}>3-Bedroom unit</option>
                                <option value="Studio-type unit" {{ ($PropertyCall->unitType === 'Studio-type unit') ? 'selected' : '' }}>Studio-type unit</option>
                                <option value="Pent-house unit"  {{ ($PropertyCall->unitType === 'Pent-house unit') ? 'selected' : ''  }}>Pent-house unit</option>
                            </select>
                        @error('unitType')
                            <small><div class="text-danger">{{$message}}</div></small>
                        @enderror

                            <label class="card-description  mt-3" for="unitType" >Category: </label>
                            <select name="category" id="category"  value="{{old('category')}}" class="form-control">
                                <option value="Sold"      {{ ($PropertyCall->category === 'Sold') ? 'selected' : ''      }}>Sold</option>
                                <option value="Reserved"  {{ ($PropertyCall->category === 'Reserved') ? 'selected' : ''  }}>Reserved</option>
                                <option value="Available" {{ ($PropertyCall->category === 'Available') ? 'selected' : '' }}>Available</option>
                            </select>
                        @error('category')
                            <small><div class="text-danger">{{$message}}</div></small>
                        @enderror

                        </div>
                        <div class="mb-3 mt-3">
                            <label class="card-description " for="" >Total Price: </label>
                            <input name="totalPrize" value="{{ $PropertyCall->totalPrize}}" placeholder="Total Price ..." class="form-control" >
                            @error('totalPrize')
                            <small><div class="text-danger">{{$message}}</div></small>
                        @enderror
                        </div>
                       
                            <button type="submit" class="btn btn-primary text-light">  Confirm  </button>
                            <a href="{{ route('property')}}" class="btn btn-light">Back</a>

                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection