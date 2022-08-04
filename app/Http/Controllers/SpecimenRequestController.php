<?php

namespace App\Http\Controllers;
use App\Models\cart;
use App\Models\SpecimenRequest;
use Illuminate\Http\Request;

class SpecimenRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $requests = SpecimenRequest::get();
        return view('dashboard.requestList',compact('requests'));
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

        if (session()->has('guestuser')) {
           
        $request->validate([
            'email' => 'required',
            'session' => 'required',
            'name' => 'required',
            'position' => 'required',
            'organisation' => 'required',
            'subject' => 'required',
            'details' => 'required',
            'requesterip' ,
            'requestercounry',
            'requestercity' ,]);
            $code =  'R'.time();
            $value = new SpecimenRequest();
            $value->email = $request->input('email');
            $value->session = $request->input('session');
            $value->name = $request->input('name');
            $value->position = $request->input('position');
            $value->organization = $request->input('organisation');
            $value->subject = $request->input('subject');
            $value->details = $request->input('details');
            $value->requesterip = $request->input('requesterip');
            $value->requestercounry = $request->input('requestercounry');
            $value->requestercity = $request->input('requestercity');
            $value->user_id = $request->input('uid');
            $value->code =$code;
            $value->save();
            cart::Where('session_id', $request->input('session'))->update(['state'=> 'submited' ]);            
            return redirect('request/view/'.$request->input('session'))->with('success', 'Record Successfully added !!');
            return redirect('home')->with('success', 'Record Successfully added !!');

    }
    else{
        return redirect()->back()->with('warning', 'Session expired !!');
    }
  }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SpecimenRequest  $specimenRequest
     * @return \Illuminate\Http\Response
     */
    public function show(SpecimenRequest $specimenRequest)
    {
        return view('dashboard.viewRequest');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SpecimenRequest  $specimenRequest
     * @return \Illuminate\Http\Response
     */
    public function edit(SpecimenRequest $specimenRequest)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SpecimenRequest  $specimenRequest
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SpecimenRequest $specimenRequest)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SpecimenRequest  $specimenRequest
     * @return \Illuminate\Http\Response
     */
    public function destroy(SpecimenRequest $specimenRequest)
    {
        //
    }
}