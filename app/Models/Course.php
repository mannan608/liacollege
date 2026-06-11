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
        'category_id','name','slug','image','pdf_file','status'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    protected static function boot()
{
    parent::boot();

    static::deleting(function ($course) {

        Storage::disk('public')->delete($course->image);
        Storage::disk('public')->delete($course->pdf_file);
    });
}
}
