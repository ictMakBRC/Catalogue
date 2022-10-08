<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectObjective extends Model
{
    use HasFactory;

    public $fillable = [
        'project_id',
        'project_code',
        'objective_name',
    ];
}
