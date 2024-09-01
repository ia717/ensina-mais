<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentLesson extends Model
{
    use HasFactory;

    protected $table = 'students_lessons';

    protected $fillable = ['user_id', 'lesson_id', 'is_completed', 'completed_at'];
}
