<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class organ extends Model
{
    use HasFactory;

    public $fillable = [
        'project_id',
        'ProjectAcronym',
        'Category' ,
        'Sample_Type' ,
        'ParticipantID' ,
        'SampleID',
        'Quantity',
        'Aliquot_Type',
        'Gender',
        'Age',
        'BMI',
        'Ethinicity',
        'Collection_Date',
        'Sample_status',
        'Store_for',
        'user_id',
        'batch_No'
    ];
}
