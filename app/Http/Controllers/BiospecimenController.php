<?php

namespace App\Http\Controllers;

use App\Models\Biospecimen;
use Illuminate\Http\Request;
use App\Models\project;
use App\Models\SpecimenType;
use App\Models\ProjectObjective;
use App\Imports\BioSpecimenImport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\DB;

class BiospecimenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $biospecimens = Biospecimen::orderBy('biospecimens.id', 'desc')
        ->leftJoin('specimen_types', 'biospecimens.specimen_type_id', '=', 'specimen_types.specimen_type')
        ->leftJoin('projects', 'biospecimens.project_id', '=', 'projects.id')
        ->select('*','biospecimens.id as bio_id','biospecimens.is_active as state')->get();
        return view('dashboard.bioSpecimen',compact('biospecimens'));
    }

    public function bioSpecific($id)
    {
        $biospecimens = Biospecimen::orderBy('biospecimens.id', 'desc')
        ->leftJoin('specimen_types', 'biospecimens.specimen_type_id', '=', 'specimen_types.specimen_type')
        ->leftJoin('projects', 'biospecimens.project_id', '=', 'projects.id')
        ->where('biospecimens.specimen_type_id',$id)
        ->select('*','biospecimens.id as bio_id','biospecimens.is_active as state')->get();
        return view('dashboard.bioSpecimenTypeSpecific',compact('biospecimens'));
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
        return view('dashboard.newBiospecimen',compact('projects','specimentypes'));
    }
    public function getProject(Request $request){

        $itemData['data'] = project::select('project_acronym as acronym')
        			->where('projects.project_acronym',$request->project_id)
        			->get();

        return response()->json($itemData);

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
            'ProjectAcronym'=> 'required',
            'PTID' => 'required',
            'SampleID' => 'required',
            'AliquotID' => 'required',
            'specimen_type_id' => 'required',
            'Gender' => 'required',
            'Age' => 'required',
            'CaseControl' => 'required',
            'VisitName' => 'required',
            'DateCollected' => 'required',
            'SPECIMEN_SOURCE' => 'required',
            'SOURCE_ORGANISM' => 'required',
            'CONCENTRATION' => 'required',
            'PURITY' => 'required',
        ]);

        Biospecimen::create($request->all());

        return redirect('catalogue/biospecimens')->with('success','Record created successfully.');
    }
    public function import()
    {
        try{
            DB::statement("SET foreign_key_checks=0");
            Biospecimen::truncate();
            DB::statement("SET foreign_key_checks=1");
        Excel::import(new BioSpecimenImport, request()->file('file')->store('files'));
        $mybatch = request()->input('batch');
        return redirect('catalogue/biospecimens/imports/'.$mybatch)->with('success', 'The following biospecimen Records were Successfully imported !!');

    }catch(\Exception $error){

        return redirect()->back()->with('error', 'Something occared '.$error);
    }
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Biospecimen  $biospecimen
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $biospecimens = Biospecimen::leftJoin('specimen_types', 'biospecimens.specimen_type_id', '=', 'specimen_types.specimen_type')
                        ->leftJoin('projects', 'biospecimens.project_id', '=', 'projects.id')
                        ->select('*','biospecimens.id as bio_id')
                        ->where('biospecimens.id', $id)->get();
                        return view('dashboard.editBiospecimen',compact('biospecimens'));
    }
    public function showIntel($id)
    {
        $biospecimens = Biospecimen::leftJoin('specimen_types', 'biospecimens.specimen_type_id', '=', 'specimen_types.specimen_type')
        ->leftJoin('projects', 'biospecimens.project_id', '=', 'projects.id')
        ->select('*','biospecimens.id as bio_id')
        ->where('biospecimens.id', $id)->get();
        $countries = Biospecimen::leftJoin('projects', 'biospecimens.project_id', '=', 'projects.id')
        ->leftJoin('countries', 'projects.pcode', '=', 'countries.project_code')
        ->where('biospecimens.id', $id)->get();
        $sites = Biospecimen::leftJoin('projects', 'biospecimens.project_id', '=', 'projects.id')
        ->leftJoin('collection_sites', 'projects.pcode', '=', 'collection_sites.project_code')
        ->where('biospecimens.id', $id)->get();
        $objectives = Biospecimen::leftJoin('projects', 'biospecimens.project_id', '=', 'projects.id')
        ->leftJoin('project_objectives', 'projects.pcode', '=', 'project_objectives.project_code')
        ->where('biospecimens.id', $id)->get();
        return view('dashboard.biospecimenIntel',compact('biospecimens','countries','sites','objectives'));

    }
    public function showimports($id)
    {
        $biospecimens = Biospecimen::leftJoin('specimen_types', 'biospecimens.specimen_type_id', '=', 'specimen_types.specimen_type')
                        ->leftJoin('projects', 'biospecimens.project_id', '=', 'projects.id')
                        ->select('*','biospecimens.id as bio_id')
                        ->where('biospecimens.batch_No', $id)->get();
                        return view('dashboard.BiospecimenImports',compact('biospecimens'));
    }
    public function importBatchs()
    {

        DB::statement("SET sql_mode=(SELECT REPLACE(@@sql_mode,'ONLY_FULL_GROUP_BY',''));");

        $biospecimens = Biospecimen::leftJoin('users', 'biospecimens.user_id', '=', 'users.id')
        ->leftJoin('projects', 'biospecimens.project_id', '=', 'projects.id')
        ->groupBy('biospecimens.batch_No')
        ->select('*','biospecimens.created_at as biodate','biospecimens.batch_No as batch', DB::raw('count(batch_No) as biolist'))
        ->get();
        DB::statement("SET sql_mode=(SELECT CONCAT(@@sql_mode, ',ONLY_FULL_GROUP_BY'));");

        return view('dashboard.BiospecimenBatch',compact('biospecimens'));

    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Biospecimen  $biospecimen
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $projects = project::orderBy('project_name', 'asc')->get();
        $specimentypes = SpecimenType::orderBy('specimen_type', 'asc')->get();
        $biospecimens = Biospecimen::leftJoin('specimen_types', 'biospecimens.specimen_type_id', '=', 'specimen_types.specimen_type')
        ->leftJoin('projects', 'biospecimens.project_id', '=', 'projects.id')
        ->select('*','biospecimens.id as bio_id')
        ->where('biospecimens.id', $id)->get();
        return view('dashboard.editBiospecimen',compact('projects','specimentypes','biospecimens'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Biospecimen  $biospecimen
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Biospecimen $id)
    {
        $request->validate([
            'project_id' => 'required',
            'ProjectAcronym'=> 'required',
            'PTID' => 'required',
            'SampleID' => 'required',
            'AliquotID' => 'required',
            'specimen_type_id' => 'required',
            'Gender' => 'required',
            'Age' => 'required',
            'CaseControl' => 'required',
            'VisitName' => 'required',
            'DateCollected' => 'required',
            'SPECIMEN_SOURCE' => 'required',
            'SOURCE_ORGANISM' => 'required',
            'CONCENTRATION' => 'required',
            'PURITY' => 'required',
        ]);
        $id->update($request->all());
        return redirect()->back()->with('success', 'Item was  successfully !!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Biospecimen  $biospecimen
     * @return \Illuminate\Http\Response
     */
    public function destroy(Biospecimen $id)
        {
        $id->delete();
        return redirect()->back()->with('success', 'Item was deleted successfully !!');
    }

     // ------------- [ Import Leads ] ----------------

}
