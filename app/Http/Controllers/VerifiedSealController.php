<?php

namespace App\Http\Controllers;

use App\Models\VerifiedSeal;
use Illuminate\Http\Request;

class VerifiedSealController extends Controller
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

    public function verifiedSealView()
    {
        $VerifiedSealDetails=VerifiedSeal::find(1);
        return view('business.configure_verified_seal')->with('VerifiedSealDetails',$VerifiedSealDetails);
    }

    public function verifiedSealEdit(Request $request)
    {
        $seal =  VerifiedSeal::find(1);

        //dd($request->username);
        //dd($request->verified_seal_path->getClientOriginalName());
        //dd($request->verified_seal_path->getRealPath());
        $path="C:/xampp/htdocs/CredKnow/storage/app/".$request->verified_seal_path->store('seal');
        //dd($path);
        //dd($request->verified_seal_path->getRealPath());
        $seal->verified_seal_path = $path;
        
        
        $seal->update();


        return redirect('business/verifiedSealView')->with(['success' => 'Role Updated successfully.']);


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
     * @param  \App\Models\VerifiedSeal  $verifiedSeal
     * @return \Illuminate\Http\Response
     */
    public function show(VerifiedSeal $verifiedSeal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\VerifiedSeal  $verifiedSeal
     * @return \Illuminate\Http\Response
     */
    public function edit(VerifiedSeal $verifiedSeal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\VerifiedSeal  $verifiedSeal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, VerifiedSeal $verifiedSeal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\VerifiedSeal  $verifiedSeal
     * @return \Illuminate\Http\Response
     */
    public function destroy(VerifiedSeal $verifiedSeal)
    {
        //
    }
}
