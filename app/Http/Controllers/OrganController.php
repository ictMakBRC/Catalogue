<?php

namespace App\Http\Controllers;

use App\Models\organ;
use Illuminate\Http\Request;

class OrganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $organs = organ::orderBy('id', 'desc')->get();
        return view('dashboard.organs',compact('organs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $projects = project::orderBy('project_name', 'asc')->get();
        // $specimentypes = SpecimenType::orderBy('specimen_type', 'asc')->get();
        // return view('dashboard.newOrgan',compact('projects','specimentypes'));
        return view('dashboard.newOrgan');
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
     * @param  \App\Models\organ  $organ
     * @return \Illuminate\Http\Response
     */
    public function show(organ $organ)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\organ  $organ
     * @return \Illuminate\Http\Response
     */
    public function edit(organ $organ)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\organ  $organ
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, organ $organ)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\organ  $organ
     * @return \Illuminate\Http\Response
     */
    public function destroy(organ $organ)
    {
        //
    }
}
