<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    use HasFactory;

    protected $fillable = ['subject_id', 'name', 'slug', 'description', 'order', 'is_high_relevance', 'image'];

    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }

    public function lessons()
    {
        return $this->hasMany(Lesson::class);
    }

        public function questionsAsPrimary()
    {
        return $this->hasMany(QuestionForum::class, 'topic_primary_id');
    }

        public function questionsAsSecondary()
    {
        return $this->hasMany(QuestionForum::class, 'topic_secondary_id');
    }
}
