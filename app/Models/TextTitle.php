<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TextTitle extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'vest_id', 'theme_id'];

    public function TextTheme()
    {
        return $this->belongsTo(TextTheme::class);
    }

    public function vestibular()
    {
        return $this->belongsTo(Vestibular::class);
    }
}
