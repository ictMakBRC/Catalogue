<?php

namespace App\Http\Controllers;

use App\Models\Tissue;
use Illuminate\Http\Request;
use App\Models\project;
use App\Models\SpecimenType;
use App\Models\ProjectObjective;
use App\Imports\TissuesImport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\DB;

class TissueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tissues = Tissue::orderBy('tissues.id', 'desc')
        ->leftJoin('specimen_types', 'tissues.specimen_type', '=', 'specimen_types.specimen_type')
        ->leftJoin('projects', 'tissues.project_acronym', '=', 'projects.project_acronym')
        ->select('*','tissues.id as tissue_id','tissues.is_active as state')->get();
        return view('dashboard.tissues',compact('tissues'));
    }

    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $projects = project::orderBy('project_name', 'asc')->get();
        $specimentypes = SpecimenType::orderBy('specimen_type', 'asc')->get();
        return view('dashboard.newTissue',compact('projects','specimentypes'));
    }

    public function import()
    {
        try{
            DB::statement("SET foreign_key_checks=0");
            Tissue::truncate();
            DB::statement("SET foreign_key_checks=1");
        Excel::import(new TissuesImport, request()->file('file')->store('files'));
        $mybatch = request()->input('batch');
        return redirect('catalogue/tissues/imports/'.$mybatch)->with('success', 'The following Tissue Records were Successfully imported !!');

    }catch(\Exception $error){

        return redirect()->back()->with('error', 'Something occared '.$error);
    }
    }
    public function showimports($id)
    {
        $tissues = Tissue::orderBy('tissues.id', 'desc')
        ->leftJoin('specimen_types', 'tissues.specimen_type', '=', 'specimen_types.specimen_type')
        ->leftJoin('projects', 'tissues.project_acronym', '=', 'projects.project_acronym')
        ->select('*','tissues.id as tissue_id','tissues.is_active as state')
        ->where('tissues.batch_No', $id)->get();
        return view('dashboard.tissuesImports',compact('tissues'));
    }
    public function importBatchs()
    {

        DB::statement("SET sql_mode=(SELECT REPLACE(@@sql_mode,'ONLY_FULL_GROUP_BY',''));");
        $tissues = Tissue::leftJoin('users', 'tissues.user_id', '=', 'users.id')
        ->select('*','tissues.id as tissue_id','tissues.created_at as tissuedate', DB::raw('count(batch_No) as list'))
        ->groupBy('tissues.batch_No')
        ->get();
        DB::statement("SET sql_mode=(SELECT CONCAT(@@sql_mode, ',ONLY_FULL_GROUP_BY'));");

        return view('dashboard.TissueBatch',compact('tissues'));

    }
    public function tissueProSpecific($id)
    {
        DB::statement("SET sql_mode=(SELECT REPLACE(@@sql_mode,'ONLY_FULL_GROUP_BY',''));");
        $tissues = Tissue::orderBy('tissues.id', 'desc')
        ->leftJoin('specimen_types', 'tissues.specimen_type', '=', 'specimen_types.specimen_type')
        ->leftJoin('projects', 'tissues.project_acronym', '=', 'projects.project_acronym')
        ->select('*','projects.id as pro_id','tissues.created_at as tissuedate', DB::raw('count(tissues.id) as tcount'))
        ->where('tissues.specimen_type',$id)
        ->groupBy('tissues.project_acronym','aliqout_type')
        ->get();
        DB::statement("SET sql_mode=(SELECT CONCAT(@@sql_mode, ',ONLY_FULL_GROUP_BY'));");

        return view('dashboard.tissueTypeSpecific',compact('tissues','id'));
    }

    public function tissueProSampleType($id)
    {
        DB::statement("SET sql_mode=(SELECT REPLACE(@@sql_mode,'ONLY_FULL_GROUP_BY',''));");
        $tissues = Tissue::orderBy('tissues.id', 'desc')
        ->leftJoin('specimen_types', 'tissues.specimen_type', '=', 'specimen_types.specimen_type')
        ->leftJoin('projects', 'tissues.project_acronym', '=', 'projects.project_acronym')
        ->select('*','projects.id as pro_id','tissues.created_at as tissuedate', DB::raw('count(tissues.id) as tcount'))
        ->where('tissues.specimen_type',$id)
        ->groupBy('tissues.project_acronym','aliqout_type')
        ->get();
        DB::statement("SET sql_mode=(SELECT CONCAT(@@sql_mode, ',ONLY_FULL_GROUP_BY'));");

        return view('dashboard.tissueTypeSpecific',compact('tissues','id'));
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
            'project_id',
            'project_acronym' => 'required',
            'category' => 'required',
            'specimen_type' => 'required',
            'participant_id' => 'required',
            'sample_id' => 'required',
            'aliqout_type' => 'required',
            'gender' => 'required',
            'age' => 'required',
            'BMI',
            'ethinicity' => 'required',
            'collection_date' => 'required',
            'donor_status' => 'required',
            'stored_for' => 'required'
        ]);
        Tissue::create($request->all());

        return redirect('catalogue/tissues')->with('success','Record created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tissue  $tissue
     * @return \Illuminate\Http\Response
     */
    public function show(Tissue $tissue)
    {
        //
    }
    public function showIntel($id)
    {
        $tissues = Tissue::leftJoin('specimen_types', 'tissues.specimen_type', '=', 'specimen_types.specimen_type')
        ->leftJoin('projects', 'tissues.project_acronym', '=', 'projects.project_acronym')
        ->select('*','tissues.id as tissue_id')
        ->where('tissues.id', $id)->get();
        $countries = Tissue::leftJoin('projects', 'tissues.project_acronym', '=', 'projects.project_acronym')
        ->leftJoin('countries', 'projects.pcode', '=', 'countries.project_code')
        ->where('tissues.id', $id)->get();
        $sites =  Tissue::leftJoin('projects', 'tissues.project_acronym', '=', 'projects.project_acronym')
        ->leftJoin('collection_sites', 'projects.pcode', '=', 'collection_sites.project_code')
        ->where('tissues.id', $id)->get();
        $objectives =  Tissue::leftJoin('projects', 'tissues.project_acronym', '=', 'projects.project_acronym')
        ->leftJoin('project_objectives', 'projects.pcode', '=', 'project_objectives.project_code')
        ->where('tissues.id', $id)->get();
        return view('dashboard.organIntel',compact('tissues','countries','sites','objectives'));

    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tissue  $tissue
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $projects = project::orderBy('project_name', 'asc')->get();
        $specimentypes = SpecimenType::orderBy('specimen_type', 'asc')->get();
        $tissues = Tissue::leftJoin('specimen_types', 'tissues.specimen_type', '=', 'specimen_types.specimen_type')
        ->leftJoin('projects', 'tissues.project_acronym', '=', 'projects.project_acronym')
        ->select('*','tissues.id as tissue_id')
        ->where('tissues.id', $id)->get();
        return view('dashboard.editTissue',compact('projects','specimentypes','tissues'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tissue  $tissue
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tissue $id)
    {
        $request->validate([
            'project_id',
            'project_acronym' => 'required',
            'category' => 'required',
            'specimen_type' => 'required',
            'participant_id' => 'required',
            'sample_id' => 'required',
            'aliqout_type' => 'required',
            'gender' => 'required',
            'age' => 'required',
            //'BMI' => 'required',
            'ethinicity' => 'required',
            'collection_date' => 'required',
            'donor_status' => 'required',
            'stored_for' => 'required',
        ]);
        $id->update($request->all());
        return redirect()->back()->with('success', 'Item was successfully updated!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tissue  $tissue
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tissue $id)
    {
        $id->delete();
        return redirect()->back()->with('success', 'Item was deleted successfully !!');
    }
}
