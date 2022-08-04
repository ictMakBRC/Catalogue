<?php

namespace App\Http\Controllers;
use App\Models\Biospecimen;
use App\Models\Tissue;
use Illuminate\Http\Request;
use App\Models\SpecimenType;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {
        $biospecimens = Biospecimen::count();
        $tissues = Tissue::count();
        $specimenTypes = SpecimenType::count();
        $biospecimentypes = Biospecimen::leftJoin('specimen_types', 'biospecimens.specimen_type_id', '=', 'specimen_types.specimen_type')
        ->groupBy('biospecimens.specimen_type_id')
        ->select('biospecimens.specimen_type_id as myspecimen', DB::raw('count(biospecimens.id) as biocount'))
        ->paginate(8);
        $tissuetypes = Tissue::leftJoin('specimen_types', 'tissues.specimen_type', '=', 'specimen_types.specimen_type')
        ->groupBy('tissues.specimen_type')
        ->select('tissues.specimen_type as myspecimen', DB::raw('count(tissues.id) as count'))
        ->paginate(8);

        DB::statement("SET sql_mode=(SELECT REPLACE(@@sql_mode,'ONLY_FULL_GROUP_BY',''));");

        $bioimports = Biospecimen::leftJoin('users', 'biospecimens.user_id', '=', 'users.id')
        ->leftJoin('projects', 'biospecimens.project_id', '=', 'projects.id')
        ->groupBy('biospecimens.batch_No')
        ->select('users.name as uname','biospecimens.created_at as biodate','biospecimens.batch_No as batch', DB::raw('count(batch_No) as biolist'))
        ->limit(5)
        ->get();

        $tissueimports = Tissue::leftJoin('users', 'tissues.user_id', '=', 'users.id')
        ->select('*','tissues.id as tissue_id','tissues.created_at as tissuedate', DB::raw('count(batch_No) as list'))
        ->groupBy('tissues.batch_No')
        ->limit(5)
        ->get();

        DB::statement("SET sql_mode=(SELECT CONCAT(@@sql_mode, ',ONLY_FULL_GROUP_BY'));");
        return view('dashboard.dashboard',compact('biospecimens','specimenTypes','biospecimentypes','bioimports','tissues','tissuetypes','tissueimports'));
    }

    public function index2()

    {
        $biospecimens = Biospecimen::count();
        $specimenTypes = SpecimenType::count();
        $biospecimentypes = Biospecimen::leftJoin('specimen_types', 'biospecimens.specimen_type_id', '=', 'specimen_types.specimen_type')
        ->groupBy('biospecimens.specimen_type_id')
        ->select('biospecimens.specimen_type_id as myspecimen', DB::raw('count(biospecimens.id) as biocount'))
        ->paginate(8);
        DB::statement("SET sql_mode=(SELECT REPLACE(@@sql_mode,'ONLY_FULL_GROUP_BY',''));");

        $bioimports = Biospecimen::leftJoin('users', 'biospecimens.user_id', '=', 'users.id')
        ->leftJoin('projects', 'biospecimens.project_id', '=', 'projects.id')
        ->groupBy('biospecimens.batch_No')
        ->select('users.name as uname','biospecimens.created_at as biodate','biospecimens.batch_No as batch', DB::raw('count(batch_No) as biolist'))
        ->limit(5)
        ->get();
        DB::statement("SET sql_mode=(SELECT CONCAT(@@sql_mode, ',ONLY_FULL_GROUP_BY'));");
        return view('dashboard.dashboardAnalysis',compact('biospecimens','specimenTypes','biospecimentypes','bioimports'));
    }

    /**
     * Show the form for creating a new .
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
