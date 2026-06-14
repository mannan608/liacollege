<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'price',
        'discount_percentage',
        'banner',
        'course_material',
        'category_id',
        'description',
        'parent_id',
        'created_by',
        'updated_by'
    ];

    public function students()
    {
        return $this->belongsToMany(User::class);
    }
}
