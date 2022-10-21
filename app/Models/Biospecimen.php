<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Biospecimen extends Model
{
    use HasFactory;

    public $fillable = [
        'project_id',
        'ProjectAcronym',
        'PTID',
        'SampleID',
        'AliquotID',
        'specimen_type_id',
        'Gender',
        'Age',
        'CaseControl',
        'VisitName',
        'DateCollected',
        'SPECIMEN_SOURCE',
        'SOURCE_ORGANISM',
        'CONCENTRATION',
        'PURITY',
        'user_id',
        'batch_No',
    ];

    public function project()
    {
        return $this->belongsTo(project::class, 'ProjectAcronym', 'project_acronym');
        
    }
    public function biospecimen()
    {
        return $this->belongsTo(project::class, 'ProjectAcronym', 'project_acronym')->select('*', 'specimen_type_id', DB::raw('count(biospecimen.id) as count'))
        ->groupBy('ProjectAcronym');
        
    }

    public function sample()
    {
        return $this->belongsTo(SpecimenType::class, 'specimen_type_id', 'specimen_type');
    }
}
