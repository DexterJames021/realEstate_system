<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\leads;
use Illuminate\Http\Request;

class LeadsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $leadsData = leads::get();
        return view("admin.leads.lead-list",compact('leadsData'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.leads.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->all();
        leads::create($input);
        return redirect('admin/lead-list');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = leads::find($id);
        return view('admin.leads.show')->with('leadsCall',$data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = leads::find($id);
        return view('admin.leads.edit')->with('leadsCall',$data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = leads::find($id);
        $input = $request->all();
        $data->update($input);
        return redirect('admin/lead-list')->with('flash_message', 'leads Updated!'); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        leads::destroy($id);
        return redirect('admin/lead-list')->with('flash_message', 'leads deleted!'); 
    }
}
