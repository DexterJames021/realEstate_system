<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\front\IndexController;
use App\Http\Controllers\front\AppointmentController;
use App\Http\Controllers\front\ContactsController;
use App\Http\Controllers\front\ReservationController;
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\LeadsController;
use App\Http\Controllers\admin\PropertyController;
use App\Http\Controllers\AuthController;

// ? ************** index ****************************
Route::group(["prefix"=> "/"], function () {
    Route::get('/',[IndexController::class,'index'])->name('index');
    Route::get('properties',[IndexController::class,'properties'])->name('properties');
    Route::get('property-details/{id}',[IndexController::class,'details'])->name('properties.details');
    
    Route::get('appointment',[AppointmentController::class,'index'])->name('appointment');
    Route::post('appointment',[AppointmentController::class,'store'])->name('appointment.store');

    Route::get('contact-us',[ContactsController::class,'index'])->name('contact-us');
    Route::post('contact-us',[ContactsController::class,'store'])->name('contact-us.store');

    // Route::get('reservation-done',[ReservationController::class,'index'])->name('reservation');
    Route::get('reservation/{id}',[ReservationController::class,'show'])->name('reservation.form');
    Route::post('reservation',[ReservationController::class,'create'])->name('reservation.add');
    Route::post('reservation-store',[ReservationController::class,'store'])->name('reservation.store');
    Route::get('get-sop/{id}',[ReservationController::class,'getPDF'])->name('get.pdf');
    Route::get('make-sop/{id}',[ReservationController::class,'makePDF'])->name('make.pdf');

});

// ? ************** auth control ****************************
Route::controller(AuthController::class)->group(function () {
    Route::get('register','register')->name('register');
    Route::post('register','registerSave')->name('register.save');
    Route::get('login','login')->name('login');
    Route::post('login','loginAction')->name('login.action');
    Route::get('logout','logout')->middleware('auth')->name('logout');

});

// ? ************** ADMIN ****************************
Route::group(['prefix'=>'admin','middleware'=>'auth','adminAuth'], function(){
    Route::get('/',[AdminController::class,'index'])->name('admin');

    Route::get('appointments-list',[AppointmentController::class,'show'])->name('appointments.list');
    Route::get('contact-list',[ContactsController::class,'show'])->name('contact-us.list');
    Route::get('reservation-list',[ReservationController::class,'index'])->name('reservation.list');

    Route::group(['prefix'=>'lead-list'],function(){
        Route::get('/',[LeadsController::class,'index'])->name('leads');
        Route::get('add-leads',[LeadsController::class,'create'])->name('leads.add');    
        Route::post('store-leads',[LeadsController::class,'store'])->name('leads.store'); 
        Route::get('show-leads/{id}',[LeadsController::class,'show'])->name('leads.show'); //view   
        Route::get('edit-leads/{id}',[LeadsController::class,'edit'])->name('leads.edit');    
        Route::post('update-leads/{id}',[LeadsController::class,'update'])->name('leads.update');    
        Route::get('delete-leads/{id}',[LeadsController::class,'destroy'])->name('leads.destroy');
    });

    Route::group(['prefix'=>'property-list'],function(){
        Route::get('/',[PropertyController::class,'index'])->name('property');
        Route::get('add-property',[PropertyController::class,'create'])->name('property.add');    
        Route::post('store-property',[PropertyController::class,'store'])->name('property.store'); 
        Route::get('show-property/{id}',[PropertyController::class,'show'])->name('property.show');  
        Route::get('edit-property/{id}',[PropertyController::class,'edit'])->name('property.edit');    
        Route::post('update-property/{id}',[PropertyController::class,'update'])->name('property.update');    
        Route::get('delete-property/{id}',[PropertyController::class,'destroy'])->name('property.destroy');
    });


});    
