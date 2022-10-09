<?php

namespace App\Http\Controllers;

use App\Models\Biospecimen;
use App\Models\cart;
use App\Models\collectionSite;
use App\Models\country;
use App\Models\organ;
use App\Models\project;
use App\Models\ProjectObjective;
use App\Models\publication;
use App\Models\SpecimenRequest;
use App\Models\SpecimenType;
use App\Models\Tissue;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Stevebauman\Location\Facades\Location;

class WebController extends Controller
{
    public function cartcount()
    {
        if (session()->has('guestuser')) {
            $guest = session()->get('guestuser');
            $cartitems = cart::Where('session_id', $guest)->get();
            $cartcount = cart::where('session_id', $guest)->count();
            session(['items' => $cartcount]);
            session(['itemcollections' => $cartitems]);
        } else {
            session(['guestuser' => time().rand(50, 1000)]);
            $guest = session()->get('guestuser');
            $cartitems = cart::Where('session_id', $guest)->get();
            $cartcount = cart::where('session_id', $guest)->count();
            session(['items' => $cartcount]);
            session(['itemcollections' => $cartitems]);
        }
    }

    public function index()
    {
        $this->cartcount();
        $biospecimens = Biospecimen::count();
        $tissues = Tissue::count();
        $specimenTypes = SpecimenType::paginate(8);
        //$ip = request()->ip();
        // $ip = '102.222.235.145';
        // $data = Location::get($ip);
        // return $data;
        $preloader = true;

        return view('web.home', compact('specimenTypes', 'biospecimens', 'tissues', 'preloader'));
    }

    public function account()
    {
        $cart = cart::where('email', auth()->user()->email)->orWhere('session_id', session(['guest']))->get();
        $user = User::where('id', auth()->user()->id)->first();

        return view('web.account', compact('user', 'cart'));
    }

    public function Allprojects()
    {
        DB::statement("SET sql_mode=(SELECT REPLACE(@@sql_mode,'ONLY_FULL_GROUP_BY',''));");

        $projects = project::with('biospecimens')->with('tissues')->with('organs')->with('countries')->with('sites')
        ->orderBy('projects.id', 'desc')->paginate(6);

        DB::statement("SET sql_mode=(SELECT CONCAT(@@sql_mode, ',ONLY_FULL_GROUP_BY'));");

        return view('web.projects', compact('projects'));
    }

    public function faq()
    {
        return view('web.faq');
    }

    public function contact()
    {
        return view('web.contact');
    }

    public function about()
    {
        $projects = project::orderBy('id', 'desc')->paginate(6);

        return view('web.about', compact('projects'));
    }

    public function projectDeatiled($code, $name)
    {
        $biospecimens = Biospecimen::where('project_id', $name)->count();
        $tissues = Tissue::where('project_acronym', $name)->count();
        $countries = country::where('project_code', $code)->orderBy('country', 'asc')->get();
        $publications = publication::where('project_code', $code)->orderBy('publication_name', 'asc')->get();
        $sites = collectionSite::where('project_code', $code)->orderBy('site_name', 'asc')->get();
        $objectives = ProjectObjective::where('project_code', $code)->orderBy('objective_name', 'asc')->get();
        $projects = project::where('pcode', $code)->get();
        $otherprojects = project::orderBy('id', 'desc')->limit(3)->get();

        return view('web.projectSingle', compact('projects', 'name', 'sites', 'countries', 'publications', 'objectives', 'biospecimens', 'tissues', 'otherprojects'));
    }

    public function biospecimen()
    {
        //$this->cartcount();
        $biocount = Biospecimen::count();
        DB::statement("SET sql_mode=(SELECT REPLACE(@@sql_mode,'ONLY_FULL_GROUP_BY',''));");
        $biospecimens = Biospecimen::leftJoin('specimen_types', 'biospecimens.specimen_type_id', '=', 'specimen_types.specimen_type')
        ->leftJoin('projects', 'biospecimens.project_id', '=', 'projects.id')
        ->groupBy('biospecimens.specimen_type_id')
        //->groupBy('biospecimens.ProjectAcronym')
        ->select('ProjectAcronym', 'container_type', 'storage_temperature', 'biospecimens.specimen_type_id as myspecimen', DB::raw('count(biospecimens.id) as count'))
        ->paginate(6);
        DB::statement("SET sql_mode=(SELECT CONCAT(@@sql_mode, ',ONLY_FULL_GROUP_BY'));");

        return view('web.biospecimens', compact('biospecimens', 'biocount'));
    }

    public function cov19()
    {
        $biocount = Biospecimen::where('ProjectAcronym', 'COVID-19')->count();
        DB::statement("SET sql_mode=(SELECT REPLACE(@@sql_mode,'ONLY_FULL_GROUP_BY',''));");
        $biospecimens = Biospecimen::leftJoin('specimen_types', 'biospecimens.specimen_type_id', '=', 'specimen_types.specimen_type')
        ->groupBy('biospecimens.specimen_type_id')
        //->groupBy('biospecimens.ProjectAcronym')
        ->where('ProjectAcronym', 'COVID-19')
        ->select('ProjectAcronym', 'container_type', 'storage_temperature', 'biospecimens.specimen_type_id as myspecimen', DB::raw('count(biospecimens.id) as count'))
        ->paginate(6);
        DB::statement("SET sql_mode=(SELECT CONCAT(@@sql_mode, ',ONLY_FULL_GROUP_BY'));");

        return view('web.covid.sarscov2', compact('biospecimens', 'biocount'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function biospecimenType($id)
    {
        $this->cartcount();
        DB::statement("SET sql_mode=(SELECT REPLACE(@@sql_mode,'ONLY_FULL_GROUP_BY',''));");
        $biospecimens = Biospecimen::leftJoin('specimen_types', 'biospecimens.specimen_type_id', '=', 'specimen_types.specimen_type')
        ->leftJoin('projects', 'biospecimens.ProjectAcronym', '=', 'projects.project_acronym')
        ->select('project_design', 'project_funder', 'disease', 'pcode', 'project_acronym', 'project_description', 'project_name', 'biospecimens.specimen_type_id as myspecimen', DB::raw('count(biospecimens.id) as biocount'))
        ->where('biospecimens.specimen_type_id', $id)
        ->groupBy('projects.project_acronym')
        ->paginate(6);
        DB::statement("SET sql_mode=(SELECT CONCAT(@@sql_mode, ',ONLY_FULL_GROUP_BY'));");
        //return $biospecimens;
        return view('web.bioTypes', compact('biospecimens', 'id'));
    }

//all biospecimen lists=====================================================================
public function bioAll($specimen, $project)
{
    $this->cartcount();
    $biocount = Biospecimen::where('biospecimens.specimen_type_id', $specimen)->where('biospecimens.ProjectAcronym', $project)->count();
    $biospecimens = Biospecimen::orderBy('biospecimens.id', 'desc')
    ->leftJoin('specimen_types', 'biospecimens.specimen_type_id', '=', 'specimen_types.specimen_type')
    ->leftJoin('projects', 'biospecimens.ProjectAcronym', '=', 'projects.project_acronym')
    ->where('biospecimens.specimen_type_id', $specimen)
    ->where('biospecimens.ProjectAcronym', $project)
    ->select('*', 'biospecimens.id as bio_id', 'biospecimens.is_active as state')
    ->paginate(9);
    $types = Biospecimen::leftJoin('specimen_types', 'biospecimens.specimen_type_id', '=', 'specimen_types.specimen_type')
    ->groupBy('biospecimens.specimen_type_id')
    ->select('biospecimens.specimen_type_id as myspecimen', DB::raw('count(biospecimens.id) as count'))
    ->get();

    return view('web.bioItems', compact('biospecimens', 'biocount', 'project', 'specimen', 'types'));
}

public function bioDeatiled($id, $name)
{
    $this->cartcount();
    $carts = cart::where('session_id', session(['guest']))->limit(5)->get();

    $tissues = Tissue::leftJoin('specimen_types', 'tissues.specimen_type', '=', 'specimen_types.specimen_type')
    ->leftJoin('projects', 'tissues.project_acronym', '=', 'projects.project_acronym')
    ->select('*', 'tissues.id as tissue_id')
    ->where('tissues.id', $id)->get();
    $countries = Tissue::leftJoin('projects', 'tissues.project_acronym', '=', 'projects.project_acronym')
    ->leftJoin('countries', 'projects.pcode', '=', 'countries.project_code')
    ->where('tissues.id', $id)->get();
    $sites = Tissue::leftJoin('projects', 'tissues.project_acronym', '=', 'projects.project_acronym')
    ->leftJoin('collection_sites', 'projects.pcode', '=', 'collection_sites.project_code')
    ->where('tissues.id', $id)->get();
    $objectives = Tissue::leftJoin('projects', 'tissues.project_acronym', '=', 'projects.project_acronym')
    ->leftJoin('project_objectives', 'projects.pcode', '=', 'project_objectives.project_code')
    ->where('tissues.id', $id)->get();
    $types = Tissue::leftJoin('specimen_types', 'tissues.specimen_type', '=', 'specimen_types.specimen_type')
    ->groupBy('tissues.specimen_type')
    ->select('tissues.specimen_type as myspecimen', DB::raw('count(tissues.id) as count'))
    ->get();
    $tissueSimi = Tissue::orderBy('tissues.id', 'desc')
    ->leftJoin('specimen_types', 'tissues.specimen_type', '=', 'specimen_types.specimen_type')
    ->leftJoin('projects', 'tissues.project_acronym', '=', 'projects.project_acronym')
    ->where('tissues.specimen_type', $name)
    ->where('tissues.id', '!=', $id)
    ->select('*', 'tissues.id as tissue_id', 'tissues.is_active as state')
    ->limit(4)
    ->get();

    return view('web.tissueDetailed', compact('tissues', 'countries', 'sites', 'objectives', 'name', 'types', 'tissueSimi', 'carts'));
}

    public function tissueProSampleType($id)
    {
        $this->cartcount();
        DB::statement("SET sql_mode=(SELECT REPLACE(@@sql_mode,'ONLY_FULL_GROUP_BY',''));");
        $tissues = Tissue::orderBy('tissues.id', 'desc')
        ->leftJoin('specimen_types', 'tissues.specimen_type', '=', 'specimen_types.specimen_type')
        ->leftJoin('projects', 'tissues.project_acronym', '=', 'projects.project_acronym')
        ->select('project_funder', 'project_design', 'aliqout_type', 'pcode', 'projects.project_acronym as project_acronym', 'project_description', 'project_name', 'projects.id as pro_id', 'tissues.created_at as tissuedate', DB::raw('count(tissues.id) as tcount'))
        ->where('tissues.specimen_type', $id)
        ->groupBy('tissues.project_acronym')
        ->paginate(6);
        DB::statement("SET sql_mode=(SELECT CONCAT(@@sql_mode, ',ONLY_FULL_GROUP_BY'));");

        return view('web.tissueTypes', compact('tissues', 'id'));
    }

    public function tissues()
    {
        DB::statement("SET sql_mode=(SELECT REPLACE(@@sql_mode,'ONLY_FULL_GROUP_BY',''));");
        //$this->cartcount();
        $tissuecount = Tissue::count();
        $tissues = Tissue::leftJoin('specimen_types', 'tissues.specimen_type', '=', 'specimen_types.specimen_type')
        ->groupBy('tissues.specimen_type')
        ->select('container_type', 'storage_temperature', 'tissues.specimen_type as myspecimen', DB::raw('count(tissues.id) as count'))
        ->paginate(1200);
        DB::statement("SET sql_mode=(SELECT CONCAT(@@sql_mode, ',ONLY_FULL_GROUP_BY'));");

        return view('web.tissues', compact('tissues', 'tissuecount'));
    }

    public function tissueAll($specimen, $project)
    {
        $this->cartcount();

        $types = Tissue::leftJoin('specimen_types', 'tissues.specimen_type', '=', 'specimen_types.specimen_type')
        ->groupBy('tissues.specimen_type')
        ->select('tissues.specimen_type as myspecimen', DB::raw('count(tissues.id) as count'))
        ->get();

        return view('web.tissueItems', compact('project', 'specimen', 'types'));
    }

    public function tissueDeatiled($id, $name)
    {
        $this->cartcount();
        $carts = cart::where('session_id', session(['guest']))->limit(5)->get();

        $value = Tissue::leftJoin('specimen_types', 'tissues.specimen_type', '=', 'specimen_types.specimen_type')
        ->leftJoin('projects', 'tissues.project_acronym', '=', 'projects.project_acronym')
        ->select('*', 'tissues.id as tissue_id')
        ->where('tissues.id', $id)->first();
        $countries = Tissue::leftJoin('projects', 'tissues.project_acronym', '=', 'projects.project_acronym')
        ->leftJoin('countries', 'projects.pcode', '=', 'countries.project_code')
        ->where('tissues.id', $id)->get();
        $sites = Tissue::leftJoin('projects', 'tissues.project_acronym', '=', 'projects.project_acronym')
        ->leftJoin('collection_sites', 'projects.pcode', '=', 'collection_sites.project_code')
        ->where('tissues.id', $id)->get();
        $objectives = Tissue::leftJoin('projects', 'tissues.project_acronym', '=', 'projects.project_acronym')
        ->leftJoin('project_objectives', 'projects.pcode', '=', 'project_objectives.project_code')
        ->where('tissues.id', $id)->get();
        $types = Tissue::leftJoin('specimen_types', 'tissues.specimen_type', '=', 'specimen_types.specimen_type')
        ->groupBy('tissues.specimen_type')
        ->select('tissues.specimen_type as myspecimen', DB::raw('count(tissues.id) as count'))
        ->get();
        $tissueSimi = Tissue::orderBy('tissues.id', 'desc')
        ->leftJoin('specimen_types', 'tissues.specimen_type', '=', 'specimen_types.specimen_type')
        ->leftJoin('projects', 'tissues.project_acronym', '=', 'projects.project_acronym')
        ->where('tissues.specimen_type', $name)
        ->where('tissues.id', '!=', $id)
        ->select('*', 'tissues.id as tissue_id', 'tissues.is_active as state')
        ->limit(4)
        ->get();

        return view('web.tissueDetailed', compact('value', 'countries', 'sites', 'objectives', 'name', 'types', 'tissueSimi', 'carts'));
    }

    public function organs()
    {
        $this->cartcount();
        $organcount = organ::count();
        $organs = organ::leftJoin('specimen_types', 'organs.specimen_type_id', '=', 'specimen_types.specimen_type')
        ->groupBy('organs.specimen_type_id')
        ->select('organs.specimen_type_id as myspecimen', DB::raw('count(organs.id) as count'))
        ->paginate(12);

        return view('web.organs', compact('organs', 'organcount'));
    }

    public function viewRequest($id)
    {
        $user = SpecimenRequest::where('session', $id)->first();
        $this->cartcount();
        $requestItems = cart::where('session_id', $id)->get();

        return view('web.viewRequest', compact('user', 'requestItems'));
    }

    public function myRequest($id)
    {
        $this->cartcount();
        $requestItems = cart::where('session_id', $id)->get();
        $user = User::where('id', auth()->user()->id)->first();

        return view('web.myRequest', compact('user', 'requestItems', 'id'));
    }

    public function myRequests()
    {
        $this->cartcount();
        $user = User::where('id', auth()->user()->id)->first();
        $requestItems = SpecimenRequest::where('email', auth()->user()->email)->get();

        return view('web.myRequests', compact('user', 'requestItems'));
    }
}
