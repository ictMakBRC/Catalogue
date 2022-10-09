<?php

namespace App\Http\Controllers;

use App\Imports\OrganImport;
use App\Models\organ;
use App\Models\project;
use App\Models\SpecimenType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;

class OrganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $organs = organ::with('project')->with('sample')->orderBy('organs.id', 'desc')->get();

        return view('dashboard.organs', compact('organs'));
    }

    public function import()
    {
        try {
            DB::statement('SET foreign_key_checks=0');
            organ::truncate();
            DB::statement('SET foreign_key_checks=1');
            Excel::import(new OrganImport, request()->file('file')->store('files'));
            $mybatch = request()->input('batch');

            return redirect('catalogue/organs/imports/'.$mybatch)->with('success', 'The following organ Records were Successfully imported !!');
        } catch(\Exception $error) {
            return redirect()->back()->with('error', 'Something occared '.$error);
        }
    }

    public function showimports($id)
    {
        $organs = organ::leftJoin('specimen_types', 'organs.specimen_type_id', '=', 'specimen_types.specimen_type')
                        ->leftJoin('projects', 'organs.project_id', '=', 'projects.id')
                        ->select('*', 'organs.id as bio_id')
                        ->where('organs.batch_No', $id)->get();

        return view('dashboard.OrganImports', compact('organs'));
    }

    public function importBatchs()
    {
        DB::statement("SET sql_mode=(SELECT REPLACE(@@sql_mode,'ONLY_FULL_GROUP_BY',''));");

        $organs = organ::leftJoin('users', 'organs.user_id', '=', 'users.id')
        ->leftJoin('projects', 'organs.project_id', '=', 'projects.id')
        ->groupBy('organs.batch_No')
        ->select('*', 'organs.created_at as biodate', 'organs.batch_No as batch', DB::raw('count(batch_No) as biolist'))
        ->get();
        DB::statement("SET sql_mode=(SELECT CONCAT(@@sql_mode, ',ONLY_FULL_GROUP_BY'));");

        return view('dashboard.organBatch', compact('organs'));
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
