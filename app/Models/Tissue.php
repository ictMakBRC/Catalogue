<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tissue extends Model
{
    use HasFactory;

    public $fillable = [
        'project_id',
        'project_acronym',
        'category',
        'specimen_type',
        'participant_id',
        'sample_id',
        'aliqout_type',
        'gender',
        'age',
        'BMI',
        'ethinicity',
        'collection_date',
        'donor_status',
        'stored_for',
        'is_active',
        'user_id',
        'batch_No',
    ];

    public function tissue()
    {
        return $this->belongsTo(project::class, 'project_acronym', 'project_acronym');
    }

    public function sample()
    {
        return $this->belongsTo(SpecimenType::class, 'specimen_type', 'specimen_type');
    }
}
