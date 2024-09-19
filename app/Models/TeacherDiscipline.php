<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeacherDiscipline extends Model
{
    use HasFactory;

    protected $table = 'teachers_disciplines';

    protected $fillable = ['user_id', 'discipline_id'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function discipline()
    {
        return $this->belongsTo(Discipline::class, 'discipline_id');
    }
}
