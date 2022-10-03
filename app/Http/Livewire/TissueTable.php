<?php

namespace App\Http\Livewire;

use App\Models\cart;
use App\Models\Tissue;
use Livewire\Component;
use Stevebauman\Location\Facades\Location;

class TissueTable extends Component
{
    public $specimen, $project, $item_type, $project_acronym, $specimen_type, $sample_id, $aliqout_type, $gender, $email,$ethinicity, $age, $donor_status;
    public function updated($fields)
    {
        $this->validateOnly($fields,[
            'item_type'=>'required',
            'project_acronym'=>'required',
            //'category'=>'required',
            'specimen_type'=>'required',
            'sample_id'=>'required',
            'aliqout_type'=>'required',
            'gender'=>'required',
            'age'=>'required',
            'ethinicity'=>'required',
            'donor_status'=>'required',
        ]);
    }
    public function mount()
    {
        $this->specimen = request()->specimen;
        $this->project = request()->project;
        $this->item_type = request()->item_type;
        $this->project_acronym = request()->project_acronym;
        $this->email =  request()->email;
        $this->specimen_type =  request()->specimen_type;
        $this->sample_id =  request()->sample_id;
        $this->aliqout_type =  request()->aliqout_type;
        $this->gender =  request()->gender;
        $this->age =  request()->age;
        $this->ethinicity =  request()->ethinicity;
        $this->donor_status =  request()->donor_status;
    }
    public function addToCart()
    {

        if (session()->has('guestuser')) {
            $guest = session()->get('guestuser');
        }
        else{
            session(['guestuser' => time().rand(50,1000)]);
        }
        // $this->validate([
        //     'item_type'=>'required',
        //     'project_acronym'=>'required',
        //     //'category'=>'required',
        //     'specimen_type'=>'required',
        //     'sample_id'=>'required',
        //     'aliqout_type'=>'required',
        //     'gender'=>'required',
        //     'age'=>'required',
        //     'ethinicity'=>'required',
        //     'donor_status'=>'required',
        //     ]);
    $ip = request()->ip();
    $data = Location::get($ip);
    $isExist = cart::select("*")
        ->where('session_id',  session('guestuser'))
        ->where('sample_id', $this->sample_id)
        ->exists();
    if ($isExist) {
        session()->flash('warning', 'Item already exists in the list !!');
    }
    else{
    $value = new cart();
    $value->session_id =  session('guestuser');
    $value->item = $this->item_type;
    $value->project_acronym = $this->project_acronym;
    $value->email = $this->email;
    $value->specimen_type = $this->specimen_type;
    $value->sample_id = $this->sample_id;
    $value->aliqout_type = $this->aliqout_type;
    $value->gender = $this->gender;
    $value->age = $this->age;
    $value->ethinicity = $this->ethinicity;
    $value->donor_status = $this->donor_status;
    $value->save();
    session()->flash('success', 'Item Successfully added !!');
    }
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
