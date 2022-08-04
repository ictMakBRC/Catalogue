<?php

namespace App\Http\Controllers;
use App\Models\SpecimenType;
use Illuminate\Http\Request;
use App\Models\Biospecimen;
use App\Models\Tissue;
use App\Models\project;
use App\Models\country;
use App\Models\publication;
use App\Models\collectionSite;
use App\Models\ProjectObjective;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()

    {
        $biospecimens = Biospecimen::count();
        $tissues = Tissue::count();
        $specimenTypes = SpecimenType::paginate(8);
    return view('home',compact('specimenTypes','biospecimens','tissues'));
    }

    public function Allprojects()
    {
        $projects = project::orderBy('id', 'desc')->paginate(6);
        return view('projects',compact('projects'));
    }

    public function projectDeatiled($id,$code,$name)
    {
        $biospecimens = Biospecimen::where('project_id',$id)->count();
        $tissues = Tissue::where('project_acronym',$name)->count();
        $countries = country::where('project_code', $code)->orderBy('country', 'asc')->get();
        $publications = publication::where('project_code', $code)->orderBy('publication_name', 'asc')->get();
        $sites = collectionSite::where('project_code', $code)->orderBy('site_name', 'asc')->get();
        $objectives = ProjectObjective::where('project_code', $code)->orderBy('objective_name', 'asc')->get();
        $projects = project::where('id', $id)->get();
        $otherprojects = project::orderBy('id', 'desc')->limit(3)->get();
        return view('project-single',compact('projects','name','sites','countries','publications','objectives','biospecimens','tissues','otherprojects'));
    }

    public function biospecimen()
    {
        $biospecimens = Biospecimen::leftJoin('specimen_types', 'biospecimens.specimen_type_id', '=', 'specimen_types.specimen_type')
        ->leftJoin('projects', 'biospecimens.project_id', '=', 'projects.id')
        ->groupBy('biospecimens.specimen_type_id')
        ->select('biospecimens.specimen_type_id as myspecimen', DB::raw('count(biospecimens.id) as biocount'))
        ->paginate(6);
        return view('biospecimens',compact('biospecimens'));
    }
        /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function biospecimenProject($id)
    {
        DB::statement("SET sql_mode=(SELECT REPLACE(@@sql_mode,'ONLY_FULL_GROUP_BY',''));");
        $biospecimens = Biospecimen::leftJoin('specimen_types', 'biospecimens.specimen_type_id', '=', 'specimen_types.specimen_type')
        ->leftJoin('projects', 'biospecimens.ProjectAcronym', '=', 'projects.project_acronym')
        ->select('disease','project_acronym','project_description','project_name','biospecimens.specimen_type_id as myspecimen', DB::raw('count(biospecimens.id) as biocount'))
        ->where('biospecimens.specimen_type_id',$id)
        ->groupBy('projects.project_acronym')
        ->paginate(6);
        DB::statement("SET sql_mode=(SELECT CONCAT(@@sql_mode, ',ONLY_FULL_GROUP_BY'));");
        //return $biospecimens;
        return view('bioSpecimenType',compact('biospecimens','id'));
    }
    public function tissueProSampleType($id)
    {
        DB::statement("SET sql_mode=(SELECT REPLACE(@@sql_mode,'ONLY_FULL_GROUP_BY',''));");
        $tissues = Tissue::orderBy('tissues.id', 'desc')
        ->leftJoin('specimen_types', 'tissues.specimen_type', '=', 'specimen_types.specimen_type')
        ->leftJoin('projects', 'tissues.project_acronym', '=', 'projects.project_acronym')
        ->select('disease','projects.project_acronym as project_acronym','project_description','project_name','projects.id as pro_id','tissues.created_at as tissuedate', DB::raw('count(tissues.id) as tcount'))
        ->where('tissues.specimen_type',$id)
        ->groupBy('tissues.project_acronym','aliqout_type')
        ->paginate(6);
        DB::statement("SET sql_mode=(SELECT CONCAT(@@sql_mode, ',ONLY_FULL_GROUP_BY'));");

        return view('tissueSpecimenType',compact('tissues','id'));
    }
    public function tissues()
    {

        $tissues = Tissue::leftJoin('specimen_types', 'tissues.specimen_type', '=', 'specimen_types.specimen_type')
        ->groupBy('tissues.specimen_type')
        ->select('tissues.specimen_type as myspecimen', DB::raw('count(tissues.id) as count'))
        ->paginate(8);
        return view('tissues',compact('tissues'));
    }
}
