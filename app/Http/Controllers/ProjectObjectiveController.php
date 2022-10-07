<?php

namespace App\Http\Controllers;

use App\Models\ProjectObjective;
use Illuminate\Http\Request;

class ProjectObjectiveController extends Controller
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
        $request->validate([
            'project_id' => 'required',
            'project_code' => 'required',
            'objective_name' => 'required',

        ]);

        ProjectObjective::create($request->all());

        return redirect()->back()->with('success', 'Objective stored successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProjectObjective  $projectObjective
     * @return \Illuminate\Http\Response
     */
    public function show(ProjectObjective $projectObjective)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProjectObjective  $projectObjective
     * @return \Illuminate\Http\Response
     */
    public function edit(ProjectObjective $projectObjective)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ProjectObjective  $projectObjective
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProjectObjective $projectObjective)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProjectObjective  $projectObjective
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProjectObjective $id)
    {
        $id->delete();

        return redirect()->back()->with('success', 'Item was deleted successfully !!');
    }
}
