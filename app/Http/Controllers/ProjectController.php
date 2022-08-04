<?php

namespace App\Http\Controllers;

use App\Models\project;
use App\Models\country;
use App\Models\publication;
use App\Models\collectionSite;
use App\Models\ProjectObjective;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = project::orderBy('id', 'desc')->get();

        return view('dashboard.projects',compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request, $id)
    {
        $code = $request->route('id');
        $countries = country::where('project_code', $id)->orderBy('country', 'asc')->get();
        $publications = publication::where('project_code', $id)->orderBy('publication_name', 'asc')->get();
        $sites = collectionSite::where('project_code', $id)->orderBy('site_name', 'asc')->get();
        $objectives = ProjectObjective::where('project_code', $id)->orderBy('objective_name', 'asc')->get();
        $projects = project::where('pcode', $id)->get();
        return view('dashboard.newproject',compact('projects','code','sites','countries','publications','objectives'));
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
            'project_acronym'=>'required',
            'project_name'=>'required',
            'project_design'=>'required',
            'project_funder'=>'required',
            'H3_africa_affiliated'=>'required',
            'pcode'=>'required',
            'project_description'=>'required'
        ]);
        //
        $value = new project();
            $value->project_acronym = $request->input('project_acronym');
            $value->project_name = $request->input('project_name');
            $value->project_design = $request->input('project_design');
            $value->project_funder = $request->input('project_funder');
            $value->H3_africa_affiliated = $request->input('H3_africa_affiliated');
            $value->pcode = $request->input('pcode');
            $value->disease = $request->input('disease');
            $value->project_description = $request->input('project_description');
            $value->country_of_collection = $request->input('country_of_collection');
            $value->user_id = auth()->user()->id;
            $value->save();
            return redirect()->back()->with('success', 'Record Successfully added !!');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(project $project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(project $project)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'project_acronym'=>'required',
            'project_name'=>'required',
            'project_design'=>'required',
            'project_funder'=>'required',
            'H3_africa_affiliated'=>'required',
            'pcode'=>'required',
            'project_description'=>'required'
        ]);
        //
            $value =project::find($id);
            $value->project_acronym = $request->input('project_acronym');
            $value->project_name = $request->input('project_name');
            $value->project_design = $request->input('project_design');
            $value->project_funder = $request->input('project_funder');
            $value->H3_africa_affiliated = $request->input('H3_africa_affiliated');
            $value->pcode = $request->input('pcode');
            $value->disease = $request->input('disease');
            $value->project_description = $request->input('project_description');
            $value->country_of_collection = $request->input('country_of_collection');
            $value->user_id = auth()->user()->id;
            $value->update();
            return redirect()->back()->with('success', 'Record Successfully added !!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(project $project)
    {
        //
    }
}
