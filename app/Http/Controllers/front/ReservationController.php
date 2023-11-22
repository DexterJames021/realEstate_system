<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Reservation;
use App\Models\property;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Http\Requests\reservation\addReservation;

class ReservationController extends Controller
{
    public function makePDF(){
        $propertyData = property::first();
        $totalPrize = $propertyData->totalPrize;
        $PassingData = Reservation::get();
       
        
        $pdf = Pdf::loadView("front.reservation.pdf", compact("PassingData",'totalPrize'));
        return $pdf->stream('SOP');

    }


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Reservation::get();
            return view("admin.reservation.reservation-list")->with('reservationData',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('front.reservation.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(addReservation $request)
    {
        $data =  $request->all();

        $fileName = time().$request->file('validId_image')->getClientOriginalName();
        $path = $request->file('validId_image')->storeAs('requirements', $fileName);
        $data['validId_image'] = '/storage/'.$path;

        $fileName = time().$request->file('tax_image')->getClientOriginalName();
        $path = $request->file('tax_image')->storeAs('requirements', $fileName);
        $data['tax_image'] = '/storage/'.$path;

        $fileName = time().$request->file('poi_image')->getClientOriginalName();
        $path = $request->file('poi_image')->storeAs('requirements', $fileName);
        $data['poi_image'] = '/storage/'.$path;
      

        Reservation::create($data);
        return view('front.reservation.success')->with('reservationData',$data);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
        $data = property::find($id); 
        return view('front.reservation.form')->with('reservationData',$data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
