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
        'Category',
        'specimen_type_id',
        'ParticipantID',
        'SampleID',
        'Quantity',
        'Aliqout',
        'Gender',
        'Age',
        'BMI',
        'Ethinicity',
        'CollectionDate',
        'Donor_Sample_Status',
        'Stored_for',
        'user_id',
        'batch_No',
    ];

    public function project()
    {
        return $this->belongsTo(project::class, 'ProjectAcronym', 'project_acronym');
    }
}
