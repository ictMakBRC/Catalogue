<?php

namespace App\Http\Controllers;

use App\Models\country;
use Illuminate\Http\Request;

class CountryController extends Controller
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'project_id' => 'required',
            'project_code' => 'required',
            'country' => 'required',

        ]);
        $isExist = country::where('project_id', $request->input('project_id'))
        ->where('country', $request->input('country'))
        ->exists();
        if ($isExist) {
            return redirect()->back()->with('error', 'Records already exist in the database !!');
        } else {
            $value = new country();
            $value->country = $request->input('country');
            $value->project_id = $request->input('project_id');
            $value->project_code = $request->input('project_code');
            // $value->user_id = auth()->user()->id;
            $value->save();

            return redirect()->back()->with('success', 'Record Successfully added !!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\country  $country
     * @return \Illuminate\Http\Response
     */
    public function show(country $country)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\country  $country
     * @return \Illuminate\Http\Response
     */
    public function edit(country $country)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\country  $country
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, country $country)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\country  $country
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $value = country::find($id);
        $value->delete();

        return redirect()->back()->with('success', 'Record deleted successfully !!');
    }
}
