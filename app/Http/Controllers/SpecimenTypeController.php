<?php

namespace App\Http\Controllers;

use App\Models\SpecimenType;
use Illuminate\Http\Request;

class SpecimenTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $specimentype = SpecimenType::orderBy('id', 'desc')->get();
        return view('dashboard.specimenType',compact('specimentype'));
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
        $this->validate($request,[
            'specimen_type'=>'required',
            'storage_temperature'=>'required',
            'container_type'=>'required'
        ]);
            $value = new SpecimenType();
            $value->specimen_type = $request->input('specimen_type');
            $value->storage_temperature = $request->input('storage_temperature');
            $value->container_type = $request->input('container_type');
            $value->save();
            return redirect()->back()->with('success', 'Record Successfully stored !!');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SpecimenType  $specimenType
     * @return \Illuminate\Http\Response
     */
    public function show(SpecimenType $specimenType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SpecimenType  $specimenType
     * @return \Illuminate\Http\Response
     */
    public function edit(SpecimenType $specimenType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SpecimenType  $specimenType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'specimen_type'=>'required',
            'storage_temperature'=>'required',
            'container_type'=>'required'
        ]);
            $value = SpecimenType::find($id);
            $value->specimen_type = $request->input('specimen_type');
            $value->storage_temperature = $request->input('storage_temperature');
            $value->container_type = $request->input('container_type');
            $value->update();
            return redirect()->back()->with('success', 'Record Successfully Updated!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SpecimenType  $specimenType
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $value = SpecimenType::find($id);
        $value->delete();
        return redirect()->back()->with('success', 'Record deleted successfully !!');
    }
}
