<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vestibular extends Model
{
    use HasFactory;

    protected $table = 'vestibulares';

    protected $fillable = ['name'];

    public function textTitles()
    {
        return $this->hasMany(TextTitle::class);
    }
}
