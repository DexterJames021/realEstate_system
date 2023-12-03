<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Appointments;
use App\Models\Contact;
use App\Models\property;
use App\Models\Reservation;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){

        $data_a = Appointments::max('id');
        $data_c = Contact::max('id');
        $data_r = Reservation::max('id');
        $data_p = Reservation::select('email')->get();

        // $name = property::where('id', 1)->pluck('id');
        return view("admin.dashboard",
         compact('data_a','data_c','data_r','data_p'));
        
    }
}
