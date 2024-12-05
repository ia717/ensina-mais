<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TextTitle extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'vest_id', 'theme_id'];

    public function textTheme()
    {
        return $this->belongsTo(TextTheme::class, 'theme_id');
    }

    public function vestibular()
    {
        return $this->belongsTo(Vestibular::class, 'vest_id');
    }
}
