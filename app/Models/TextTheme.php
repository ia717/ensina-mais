<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TextTheme extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function textTitle()
    {
        return $this->hasMany(TextTitle::class);
    }
}
