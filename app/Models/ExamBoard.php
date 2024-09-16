<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExamBoard extends Model
{
    use HasFactory;

    protected $fillable = ['name'];
    
    // Relacionamento: uma banca possui muitas questões
    public function questions()
    {
        return $this->hasMany(Question::class);
    }
}
