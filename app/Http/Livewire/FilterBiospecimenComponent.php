<?php

namespace App\Http\Livewire;

use App\Models\Biospecimen;
use App\Models\organ;
use App\Models\SpecimenType;
use App\Models\Tissue;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class FilterBiospecimenComponent extends Component
{
    public $specimen;

    public $project;

    public $age;

    public $gender;

    public $biospecimensAll;

    public $covAll;

    public $specimensAll;

    public $tissuesAll;

    public $organsAll;

    public $data, $bioid, $status;
  //  public $rgender, $rethinicity, $rage, $rstudy, $rcase;

    public function mount($specimentype)
    {
        $this->bioid = $specimentype;
        DB::statement("SET sql_mode=(SELECT REPLACE(@@sql_mode,'ONLY_FULL_GROUP_BY',''));");
      // if($this->project != null){
            $this->data = Biospecimen::select('*',DB::raw('count(biospecimens.id) as count'))
            ->where('biospecimens.specimen_type_id', $this->bioid)->groupBy('ProjectAcronym')->get();
           // $this->data = [];
      // }
        DB::statement("SET sql_mode=(SELECT CONCAT(@@sql_mode, ',ONLY_FULL_GROUP_BY'));");
    }
    public function filter()
    {
        DB::statement("SET sql_mode=(SELECT REPLACE(@@sql_mode,'ONLY_FULL_GROUP_BY',''));");
       
            $this->data = Biospecimen::select('*',DB::raw('count(biospecimens.id) as count'))
            ->where('biospecimens.specimen_type_id', $this->bioid)
            ->when($this->project != '', function ($query) {
                $query->where('ProjectAcronym',$this->project);
                //$this->rstudy = $this->project;
            })
            // ->when($this->bioid != '', function ($query) {
            //     $query->where('CaseControl',$this->bioid);
            // })
            ->when($this->status != '', function ($query) {
                $query->where('CaseControl',$this->status);
                //$this->rcase = $this->status;
            })
            ->when($this->gender != '', function ($query) {
                $query->where('Gender',$this->gender); 
               // $this->rgender = $this->gender;
            })->groupBy('ProjectAcronym')->get();
      
        DB::statement("SET sql_mode=(SELECT CONCAT(@@sql_mode, ',ONLY_FULL_GROUP_BY'));");
    }

    public function render()
    {
        DB::statement("SET sql_mode=(SELECT REPLACE(@@sql_mode,'ONLY_FULL_GROUP_BY',''));");
   
          //  $biospecimens = Biospecimen::where('biospecimens.specimen_type_id', $this->bioid)->groupBy('ProjectAcronym')->get();
    
        DB::statement("SET sql_mode=(SELECT CONCAT(@@sql_mode, ',ONLY_FULL_GROUP_BY'));");
        $biospecimensAll = Biospecimen::get();
        $biospecimensType = Biospecimen::select('specimen_type_id')->groupBy('specimen_type_id')->where('specimen_type_id','!=',$this->bioid)->get();
        $Casestatus = Biospecimen::select('CaseControl')->groupBy('CaseControl')->get();
        $study = Biospecimen::select('ProjectAcronym')->groupBy('ProjectAcronym')->get();
        
        return view('livewire.filter-biospecimen-component', compact('Casestatus', 'biospecimensAll','biospecimensType','study'))->layout('web.layouts.appLayout');
    }
}
