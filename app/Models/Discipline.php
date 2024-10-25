<?php

namespace App\Models;

use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use Spatie\EloquentSortable\Sortable;
use Spatie\EloquentSortable\SortableTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Discipline extends Model implements Sortable
{
    use HasFactory;
    use HasSlug;
    use SortableTrait;

    protected $fillable = ['name', 'slug', 'description', 'category_id', 'order', 'icon', 'material_link', 'material_info'];

    public $sortable = [
        'order_column_name' => 'order',
        'sort_when_creating' => true,
    ];
    
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
        return $this->belongsToMany(User::class, 'teachers_disciplines');
    }
    public function questions()
    {
        return $this->hasMany(QuestionForum::class);
    }

    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('name')
            ->saveSlugsTo('slug');
    }
}
