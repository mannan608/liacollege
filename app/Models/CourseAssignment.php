<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseAssignment extends Model
{
    protected $fillable = [
        'course_id',
        'title',
        'file',
        'allow_submission',
        'submission_limit',
        'sort_order'
    ];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
