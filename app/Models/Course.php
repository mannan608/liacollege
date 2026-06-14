<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;

class Course extends Model
{
    use HasFactory,SoftDeletes;
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

    public function users()
{
    return $this->belongsToMany(User::class);
}
public function category()
{
    return $this->belongsTo(Category::class);
}
}
