<?php

namespace App\Http\Controllers;

use App\Models\collectionSite;
use Illuminate\Http\Request;

class CollectionSiteController extends Controller
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
            'site_name' => 'required',
            'project_code' => 'required',
        ]);
        $isExist = collectionSite::where('project_id', $request->input('project_id'))
        ->where('site_name', $request->input('site_name'))
        ->where('country_name', $request->input('country_name'))
        ->exists();
        if ($isExist) {
            return redirect()->back()->with('error', 'Records already exist in the database !!');
        } else {
            $value = new collectionSite();
            $value->site_name = $request->input('site_name');
            $value->country_name = $request->input('country_name');
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
     * @param  \App\Models\collectionSite  $collectionSite
     * @return \Illuminate\Http\Response
     */
    public function show(collectionSite $collectionSite)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\collectionSite  $collectionSite
     * @return \Illuminate\Http\Response
     */
    public function edit(collectionSite $collectionSite)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\collectionSite  $collectionSite
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, collectionSite $collectionSite)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\collectionSite  $collectionSite
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $value = collectionSite::find($id);
        $value->delete();

        return redirect()->back()->with('success', 'Record deleted successfully !!');
    }
}
