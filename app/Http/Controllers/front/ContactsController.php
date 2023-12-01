<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Http\Requests\contact\contactForm;
use Illuminate\Http\Request;


class ContactsController extends Controller
{
    public function index(){
        return view("front.contacts.form");
    }
    public function store(contactForm $request){
        $input = $request->all();
        Contact::create($input);
        return redirect()->route('contact-us')->with("success","Message sent. Await our email. Thanks!");
    }
    public function show(){
        $data = Contact::get();
        return view("admin.contact-list.contact-us-form",compact('data'));
    }
}
