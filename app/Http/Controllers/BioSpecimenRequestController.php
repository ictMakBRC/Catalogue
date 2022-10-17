<?php

namespace App\Http\Controllers;

use App\Models\Biospecimen;
use Illuminate\Http\Request;
use App\Models\BioSpecimenRequest;
use Illuminate\Support\Facades\DB;

class BioSpecimenRequestController extends Controller
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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function filter(Request $request, $specimentype)
    {

        
        DB::statement("SET sql_mode=(SELECT REPLACE(@@sql_mode,'ONLY_FULL_GROUP_BY',''));");
            $ethinicity =$request->ethinicity != '' ? $request->ethinicity : 'ALL';
            $gender =$request->gender != '' ? $request->gender : 'ALL';
            $status = $request->status != '' ? $request->status : 'ALL';
            $age = $request->age != '' ? $request->age : 'ALL';
            $bioid = $request->bioid != '' ? $request->bioid : $specimentype;
            $project = $request->project != '' ? $request->project : 'ALL';
            $biospecimensAll = Biospecimen::count();
            $biospecimensType = Biospecimen::select('specimen_type_id')->groupBy('specimen_type_id')->where('specimen_type_id','!=',$bioid)->get();
            $Casestatus = Biospecimen::select('CaseControl')->groupBy('CaseControl')->get();
            $study = Biospecimen::select('ProjectAcronym')->groupBy('ProjectAcronym')->get();

            $data = Biospecimen::select('*',DB::raw('count(biospecimens.id) as count'))
            ->where('biospecimens.specimen_type_id', $bioid)
            ->when($request->project != 'ALL', function ($query) use ($request) {
                $query->where('ProjectAcronym',$request->project);
            })
            // ->when($request->bioid != '', function ($query) use ($request) {
            //     $query->where('CaseControl',$request->bioid);
            // })          
            ->when($request->status != 'ALL', function ($query) use ($request)  {
                $query->where('CaseControl',$request->status);                
            })
            ->when($request->gender != 'ALL', function ($query) use ($request) {
                $query->where('Gender',$request->gender);             
            })->groupBy('ProjectAcronym')->get();
         
          return view('web.filter-biospecimen',compact('data','ethinicity','age','gender','status','bioid','project','Casestatus', 'biospecimensAll','biospecimensType','study'));
        DB::statement("SET sql_mode=(SELECT CONCAT(@@sql_mode, ',ONLY_FULL_GROUP_BY'));");
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'quantity' => 'required',
            'details' => 'required',
        ]);
       // return  $request->quantity;
        $value = new BioSpecimenRequest();
        $value->session_id = session()->get('guestuser');
        $value->quantity = $request->quantity;
        $value->details = $request->details;
        $value->save();
        return redirect()->back()->with('success', 'Item Successfully added !!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BioSpecimenRequest  $bioSpecimenRequest
     * @return \Illuminate\Http\Response
     */
    public function show(BioSpecimenRequest $bioSpecimenRequest)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BioSpecimenRequest  $bioSpecimenRequest
     * @return \Illuminate\Http\Response
     */
    public function edit(BioSpecimenRequest $bioSpecimenRequest)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BioSpecimenRequest  $bioSpecimenRequest
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BioSpecimenRequest $bioSpecimenRequest)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BioSpecimenRequest  $bioSpecimenRequest
     * @return \Illuminate\Http\Response
     */
    public function destroy(BioSpecimenRequest $bioSpecimenRequest)
    {
        //
    }
}
