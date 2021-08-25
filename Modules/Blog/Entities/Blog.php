<?php

namespace Modules\Blog\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Blog extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected static function newFactory()
    {
        return \Modules\Blog\Database\factories\BlogFactory::new();
    }


    public function setSlugAttribute($value)
    {
        return $this->attributes['slug'] = \Str::slug(strip_tags($value) ,'-');
    }


    public function scopePublished($query)
    {
        return $query->where('is_published', true);
    }
}
