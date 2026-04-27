<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuizAnswer extends Model
{
    use HasFactory;

    protected $fillable = [
        'session_id',
        'question_key',
        'question_text',
        'answer_value',
        'answer_label',
        'answers',
        'full_name',
        'phone',
        'email',
        'country',
        'message',
        'step',
        'total_steps',
        'completed_at',
        'ip_address',
        'user_agent',
    ];

    protected $casts = [
        'answers' => 'array',
        'completed_at' => 'datetime',
    ];
}
