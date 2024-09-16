<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnswerForum extends Model
{
    use HasFactory;

protected $fillable = [
    'question_id',
    'user_id',
    'answer',
    'created-at',
    'updated-at',
];

public function question() {
    return $this->belongsTo(QuestionForum::class);
}

public function user() {
    return $this->belongsTo(User::class);
}
}
