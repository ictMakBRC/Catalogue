<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class SpecimenRequest extends Model
{
    use HasFactory,Notifiable;
    protected $fillable = [
        'email',
        'session',
        'name',
        'phone',
        'position',
        'organization',
        'country',
        'subject',
        'details',
        'requesterip',
        'requestercounry',
        'requestercity',
        'code',
        'user_id',
        
    ];

}
