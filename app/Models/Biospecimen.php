<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Biospecimen extends Model
{
    use HasFactory;
    public $fillable = [
        'project_id',
        'ProjectAcronym',
        'PTID' ,
        'SampleID' ,
        'AliquotID' ,
        'specimen_type_id',
        'Gender',
        'Age',
        'CaseControl',
        'VisitName' ,
        'DateCollected' ,
        'SPECIMEN_SOURCE',
        'SOURCE_ORGANISM' ,
        'CONCENTRATION' ,
        'PURITY',
        'user_id',
        'batch_No'
    ];
}