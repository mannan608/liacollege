<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseAssignmentSubmission extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'course_assignment_id',
        'file',
        'notes',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function assignment()
    {
        return $this->belongsTo(CourseAssignment::class, 'course_assignment_id');
    }
}
