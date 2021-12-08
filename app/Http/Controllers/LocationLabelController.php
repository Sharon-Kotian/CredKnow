<?php

namespace App\Http\Controllers;

use App\Models\LocationLabel;
use Illuminate\Http\Request;

class LocationLabelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
    public function locationView()
    {
        return view('business.configure_location_labels');
    }
    public function addNewLocationLabel(Request $request)
    {
        $this->validate($request, [
            'location_label_name' => 'required|unique:location_labels',
            ]);
            
        $label = New LocationLabel();
        $label->location_label_name = $request->location_label_name;
        
        $label->save();

        return redirect()->back()->with(['success'=> 'Role Added Succesfully.']);    
    }

    public function locationLabelEdit(Request $request)
    {
        $id = $request->id;

        $LocationLabelDetails=LocationLabel::find($id);
        return view('business.editLocationLabel')->with('LocationLabelDetails',$LocationLabelDetails);
    }

    public function locationLabelEditUpdate(Request $request)
    {
        $id = $request->id;

        $label = LocationLabel::find($id);

        //dd($request->username);
        //dd($request->email);
        $label->location_label_name = $request->location_label_name;
        
        
        $label->update();

        //return view('admin.allProducts')->with(['success' => 'Product Updated successfully.']);

        return redirect('business/locationView')->with(['success' => 'Location Label Updated successfully.']);


    }

    public function locationLabelDelete(Request $request)
    {
        $id = $request->id;
       $res=LocationLabel::find($id)->delete();
       return redirect()->back()->with(['success' => 'Location Label deleted successfully.']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\LocationLabel  $locationLabel
     * @return \Illuminate\Http\Response
     */
    public function show(LocationLabel $locationLabel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\LocationLabel  $locationLabel
     * @return \Illuminate\Http\Response
     */
    public function edit(LocationLabel $locationLabel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\LocationLabel  $locationLabel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LocationLabel $locationLabel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LocationLabel  $locationLabel
     * @return \Illuminate\Http\Response
     */
    public function destroy(LocationLabel $locationLabel)
    {
        //
    }
}
