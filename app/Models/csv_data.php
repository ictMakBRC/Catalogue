<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class csv_data extends Model
{
    use HasFactory;

    protected $table = 'csv_data';

    protected $fillable = ['csv_filename', 'csv_header', 'csv_data'];
}
