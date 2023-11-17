<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use Illuminate\Http\Storage;
use App\Http\Controllers\Controller;
use App\Models\property;

class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $propertyData = property::get();
        return view("admin.properties-crud.property-list")->with("propertyData", $propertyData);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.properties-crud.add-property');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        
        // uploading image
        $fileName = time().$request->file('coverImage')->getClientOriginalName();
        $path = $request->file('coverImage')->storeAs('realestate_images', $fileName,'public');
        $data['coverImage'] = '/storage/'.$path;

        property::create($data);
        return redirect('admin/property-list');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = property::find($id);
        return view('admin.properties-crud.show')->with('PropertyCall',$data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = property::find($id);
        return view('admin.properties-crud.edit')->with('PropertyCall',$data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = property::find($id);
        $input = $request->all();

        if ($request->hasFile('coverImage')) {
                $imagePath = request()->file('coverImage')->move('realestate_images','public');
                $input['coverImage'] = $imagePath;
        }

        $data->update($input);
        return redirect('admin/property-list')->with('flash_message', 'property Updated!'); 

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        property::destroy($id);
        return redirect('admin/property-list')->with('flash_message', 'property deleted!');
    }
}
