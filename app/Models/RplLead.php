<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RplLead extends Model
{
   protected $fillable = [
        'age',
        'employment_status',
        'care_role',
        'sector',
        'experience_years',
        'communication',
        'documents',
        'evidence_ready',
        'fast_track',
        'name',
        'phone',
        'email',
        'course',
    ];
    protected $casts = [
        'sector' => 'array',
        'documents' => 'array',
        'care_role' => 'boolean',
        'communication' => 'boolean',
        'evidence_ready' => 'boolean',
        'fast_track' => 'boolean',
    ];
}
