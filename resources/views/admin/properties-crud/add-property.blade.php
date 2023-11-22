@extends('layouts.admin')
@section('content')
    <div class="content-wrapper">
        <div class="col">
            <div class="card">
               <div class="card-body">
                <h3 class="card-title">ADD PROPERTIES</h3>


                <form enctype='multipart/form-data' method="post" action="{{ route('property.store')}}">
                    <fieldset>
                    @csrf
                    <div class="mb-3 mt-3">
                        <label class="form-label card-description" for="coverImage" >Choose Cover Image: </label>
                        <input type="file" name="coverImage" value="{{old('coverImage')}}" placeholder="Cover Image ..." class="form-control">
                        <div class="alert">
                            @error('coverImage')
                                <small><div class="text-danger">{{$message}}</div></small>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label card-description" for="residencialName" >Residencial Name: </label>
                        <input type="text" name="residencialName" value="{{old('residencialName')}}" placeholder="Residencial Name ..." class="form-control">
                        <div class="alert mb-3">
                            @error('residencialName')
                                <small><div class="text-danger">{{$message}}</div></small>
                            @enderror    
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label card-description" for="unitType" >Unit Type: </label>
                        <select name="unitType" id="unitType"  value="{{old('unitType')}}" class="form-control">
                            <option selected disabled hidden>--- Select Unit ---</option>
                            <option  {{ old('unitType') == '1-Bedroom unit'? "selected" : "" }} value ="1-Bedroom unit">1-Bedroom  unit</option> 
                            <option  {{ old('unitType') == '2-Bedroom unit'? "selected" : "" }} value ="2-Bedroom unit">2-Bedroom unit</option>
                            <option  {{ old('unitType') == '3-Bedroom unit'? "selected" : "" }} value ="3-Bedroom unit">3-Bedroom unit</option>
                            <option  {{ old('unitType') == 'Studio-type unit'? "selected" : "" }} value ="Studio-type unit">Studio-type unit</option>
                            <option  {{ old('unitType') == 'Pent-house unit'? "selected" : "" }} value ="Pent-house unit">Pent-house unit</option>
                        </select>
                        <div class="alert mb-0">
                            @error('unitType')
                                <small><div class="text-danger">{{$message}}</div></small>
                            @enderror    
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label card-description" for="category" >Category: </label>
                        <select name="category" id="category"   class="form-control">
                            <option selected disabled hidden>--- Select Category ---</option>
                            <option {{ old('category') == 'Sold'? "selected" : "" }} value="Sold">Sold</option>
                            <option {{ old('category') == 'Reserved'? "selected" : "" }} value="Reserved">Reserved</option>
                            <option {{ old('category') == 'Available'? "selected" : "" }} value="Available">Available</option>
                        </select>
                        <div class="alert mb-3">
                            @error('category')
                                <small><div class="text-danger">{{$message}}</div></small>
                            @enderror      
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label card-description" for="totalPrize" >Total Price: </label>
                        <input type="text" name="totalPrize" maxlength="11" value="{{ old('totalPrize') }}" placeholder="Total Price ..." class="form-control" >
                        <div class="alert mb-3">
                            @error('totalPrize')
                                <small><div class="text-danger">{{$message}}</div></small>
                            @enderror   
                        </div>
                    </div>
                    <div class="mb-3" >
                        <button type="submit" class="btn btn-primary text-light">  ADD  </button>
                            
                        <a href="{{ route('property')}}"  class="btn btn-danger text-light">  BACK  </a>
                    </div>
                    </fieldset>
                </form>
               </div>
            </div>
        </div>
    </div>
    </div>
@endsection