<?php

namespace Modules\Blog\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

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

    public function getExcerptAttribute($value)
    {
        return $this->attributes['excerpt'] = Str::limit($this->content, 300 , ' ');
    }
    public function getFeaturedImageAttribute($value)
    {
        $image = asset('images/blog-0'.random_int(1,2).'.jpeg');


        return $this->attributes['featured_image'] = is_null($value) ? $image :  Storage::url($value);
    }
}
