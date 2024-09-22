<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentText extends Model
{
    use HasFactory;
    
    protected $fillable = ['id', 'number_line','number_word', 'paragraph', 'time'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function title()
    {
        return $this->belongsTo(TextTitle::class);
    }

    public function TextTheme()
    {
        return $this->belongsTo(TextTheme::class);
    }

    public function vestibular()
    {
        return $this->belongsTo(Vestibular::class);
    }
}
