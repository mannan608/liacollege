<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CoursePolicy extends Model
{
    protected $fillable = [
        'course_id',
        'title',
        'url',
        'sort_order'
    ];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
