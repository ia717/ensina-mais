<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug', 'description', 'category_id', 'order', 'icon', 'material_link', 'material_info'];
    
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function topics()
    {
        return $this->hasMany(Topic::class);
    }

    public function teachers()
    {
        return $this->belongsToMany(User::class, 'teachers_subjects');
    }
    public function questions()
    {
        return $this->hasMany(QuestionForum::class);
    }
}
