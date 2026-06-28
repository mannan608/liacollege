<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = [
        'title',
        'description',
        'banner',
        'created_by',
        'updated_by'
    ];

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
    public function policies()
    {
        return $this->hasMany(CoursePolicy::class);
    }

    public function assignments()
    {
        return $this->hasMany(CourseAssignment::class);
    }

    public function materials()
    {
        return $this->hasMany(CourseMaterial::class);
    }

    public function createdBy()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function updatedBy()
    {
        return $this->belongsTo(User::class, 'updated_by');
    }
}
