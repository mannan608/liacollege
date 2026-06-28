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

    public function users()
    {
        return $this->belongsToMany(User::class, 'user_course_assignments');
    }

    public function submissions()
    {
        return $this->hasMany(CourseAssignmentSubmission::class, 'course_assignment_id');
    }
}
