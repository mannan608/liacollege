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
        'category_id',
        'description',
        'parent_id',
        'created_by',
        'updated_by'
    ];
}
