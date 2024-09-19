<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TextTitle extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'title'];

    public function tematicAxis()
    {
        return $this->hasMany(TematicAxis::class);
    }

    public function vestibular()
    {
        return $this->hasMany(Vestibular::class);
    }
}
