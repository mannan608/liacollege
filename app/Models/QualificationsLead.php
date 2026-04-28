<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class QualificationsLead extends Model
{
  protected $fillable = [
        'name',
        'phone',
        'email',
        'course',
        'availability',
    ];

    protected $casts = [
        'availability' => 'datetime',
    ];
}
