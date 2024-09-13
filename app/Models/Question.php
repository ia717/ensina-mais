<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = ['subject_id', 'topic_id', 'statement', 'type', 'correct_answer_id', 'is_high_relevance'];

    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }

    public function topic()
    {
        return $this->belongsTo(Topic::class)->nullable();
    }

    public function answers()
    {
        return $this->hasMany(QuestionAnswer::class);
    }
}
