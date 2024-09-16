<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnswerForum extends Model
{
    use HasFactory;

    protected $fillable = [
        'question_forum_id',
        'user_id',
        'answer',
        'created_at',
        'updated_at',
    ];

    public function question() {
        return $this->belongsTo(QuestionForum::class, 'question_id');
    }

    public function user() {
        return $this->belongsTo(User::class);
    }
}