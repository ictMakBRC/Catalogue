<?php

namespace App\Http\Livewire;

use App\Models\cart;
use App\Models\Tissue;
use Livewire\Component;

class TissueTable extends Component
{
    public $specimen, $project;
    public function mount()

    {

        $this->specimen = request()->specimen;
        $this->project = request()->project;

    }
    public function render()
    {
        if (session()->has('guestuser')) {
            $guest = session()->get('guestuser');
            $cartitems = cart::Where('session_id', $guest)->get();
        }
        else{
            session(['guestuser' => time().rand(50,1000)]);
            $guest = session()->get('guestuser'); 
            $cartitems = cart::Where('session_id', $guest)->get();         
        }
        $tissuecount = Tissue::where('tissues.specimen_type',$this->specimen)->where('tissues.project_acronym',$this->project)->count();
        $tissues = Tissue::orderBy('tissues.id', 'desc')
        ->leftJoin('specimen_types', 'tissues.specimen_type', '=', 'specimen_types.specimen_type')
        ->leftJoin('projects', 'tissues.project_acronym', '=', 'projects.project_acronym')
        ->where('tissues.specimen_type',$this->specimen)
        ->where('tissues.project_acronym',$this->project)
        ->select('*','tissues.id as tissue_id','tissues.is_active as state')
        ->paginate(9);
        $specimen = $this->specimen;
        $project = $this->project;
        return view('livewire.tissue-table',compact('tissues','cartitems','specimen','project','tissuecount'));
    }
}
