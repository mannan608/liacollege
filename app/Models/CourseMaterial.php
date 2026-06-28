<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseMaterial extends Model
{
    protected $fillable = [
        'course_id',
        'title',
        'file',
        'sort_order'
    ];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
