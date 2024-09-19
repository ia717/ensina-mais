<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Question extends Model
{
    use HasFactory;

    protected $fillable = ['discipline_id', 'topic_id', 'statement', 'type', 'is_high_relevance', 'solution'];

    public function discipline()
    {
        return $this->belongsTo(Discipline::class);
    }

    public function topic()
    {
        return $this->belongsTo(Topic::class)->nullable();
    }

    public function answers()
    {
        return $this->hasMany(QuestionAnswer::class);
    }

    public function correctAnswer()
    {
        return $this->hasOne(QuestionAnswer::class)->where('is_correct', true);
    }

    public function examBoard()
    {
        return $this->belongsTo(ExamBoard::class);
    }
}
