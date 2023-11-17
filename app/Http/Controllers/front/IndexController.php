<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\property;
use App\Models\Reservation;
use Illuminate\Support\Facades\Validator;


class IndexController extends Controller
{
    public function index(){
        return view("front.index");
    }

    public function appointment(){
        return view("front.appointment.form");
    }
    public function properties(){
        $propertyData = property::get();
        return view("front.properties.properties")->with("propertyData", $propertyData);
    }
    public function details(string $id){

        $propertyData = property::find($id);
        return view('front.properties.property-details')->with('PropertyData',$propertyData);
    }




    
}
