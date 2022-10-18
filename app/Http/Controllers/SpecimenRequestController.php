<?php

namespace App\Http\Controllers;

use App\Models\cart;
use App\Models\FacilityInformation;
use Illuminate\Http\Request;
use App\Models\SpecimenRequest;
use App\Notifications\RequestNotification;
use Illuminate\Support\Facades\Notification;
use PhpParser\Node\Stmt\TryCatch;

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

        return view('dashboard.requestList', compact('requests'));
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
                'phone' => 'required',
                'country' => 'required',
                'requesterip',
                'requestercounry',
                'requestercity', ]);
            $code = 'R'.time();
            $value = new SpecimenRequest();
            $value->email = $request->input('email');
            $value->session = $request->input('session');
            $value->name = $request->input('name');
            $value->phone = $request->input('phone');
            $value->country = $request->input('country');
            $value->position = $request->input('position');
            $value->organization = $request->input('organisation');
            $value->subject = $request->input('subject');
            $value->details = $request->input('details');
            $value->requesterip = $request->input('requesterip');
            $value->requestercounry = $request->input('requestercounry');
            $value->requestercity = $request->input('requestercity');
            $value->user_id = $request->input('uid');
            $value->code = $code;
            $value->save();
            cart::Where('session_id', $request->input('session'))->update(['state' => 'submited']);
            session(['guestuser' => time().rand(50, 1000)]);

            $greeting='Hello'.' '.$request->name;
            $body='Your request titled'.' '.$request->subject;
            $actiontext='Click to viewy, download or track status, track code is:'.$request->input('session');
            $details=[
                'greeting'=>$greeting,
                'body'=>$body,
                'actiontext'=>$actiontext,
                'actionurl'=>'http://catalog.makbrc.online/request/view/'.$request->input('session')
            ];
            $detail=[
                'greeting'=>'Hello Admin',
                'body'=>$request->name.' Has submitted a new specimen request titled'.' '.$request->subject,
                'actiontext'=>$actiontext,
                'actionurl'=>'http://catalog.makbrc.online/request/view/'.$request->input('session')
            ];
            try{
            $inserted=SpecimenRequest::findOrFail($value->id);
            Notification::send( $inserted,new RequestNotification($details));

            $admin=FacilityInformation::findOrFail(1);
            Notification::send($admin,new RequestNotification($detail));
            }catch(\Exception $error){
                return redirect('request/view/'.$request->input('session'))->with('success', 'Record Successfully added !!');
            }
            return redirect('request/view/'.$request->input('session'))->with('success', 'Record Successfully added !!');

            return redirect('home')->with('success', 'Record Successfully added !!');
        } else {
            return redirect()->back()->with('warning', 'Session already expired !!');
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
