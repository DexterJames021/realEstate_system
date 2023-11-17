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
                        <label class="form-label card-description" for="" >Choose Cover Image: </label>
                        <input type="file" name="coverImage" value="{{old('coverImage')}}" placeholder="Cover Image ..." class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label card-description" for="" >Residencial Name: </label>
                        <input type="text" name="residencialName" value="{{old('residencialName')}}" placeholder="Residencial Name ..." class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label card-description" for="unitType" >Unit Type: </label>
                        <select name="unitType" id="unitType"  value="{{old('unitType')}}" class="form-control">
                            <option selected disabled hidden>--- Select Unit ---</option>
                            <option value="1-Bedroom unit" >1-Bedroom  unit</option>
                            <option value="2-Bedroom unit" >2-Bedroom unit</option>
                            <option value="3-Bedroom unit" >3-Bedroom unit</option>
                            <option value="Studio-type unit">Studio-type unit</option>
                            <option value="Pent-house unit">Pent-house unit</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label card-description" for="category" >Category: </label>
                        <select name="category" id="category"  value="{{old('category')}}" class="form-control">
                            <option selected disabled hidden>Select Category</option>
                            <option value="Sold" >Sold</option>
                            <option value="Reserved" >Reserved</option>
                            <option value="Available" >Available</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label card-description" for="" >Total Prize: </label>
                        <input name="totalPrize" value="{{old('totalPrize')}}" placeholder="Total Prize ..." class="form-control" >
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