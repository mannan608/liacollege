<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = [
        'title',
        'description',
        'banner'
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
}
