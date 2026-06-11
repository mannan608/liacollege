<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Course extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable = [
        'category_id','name','slug','image','pdf_file','status'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
