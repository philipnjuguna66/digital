<?php

namespace App\Http\Livewire;

use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use Livewire\Component;
use Livewire\WithFileUploads;
use Modules\Blog\Entities\Blog;

class CreateBlog extends Component
{

    use WithFileUploads;

    public $title;

    public  $meta_description;

    public $meta_title;


    public $seo_slug;


    public $content;


    public $featured_image;


    public bool $is_published = true;


    public $featured_image_path;

    public function updatingSeoSlug()
    {
        $this->seo_slug = Str::limit($this->seo_slug , 75 , ' ... ');
        return Str::slug($this->seo_slug,'-');
    }
    public function updatedMetaTiltle()
    {
        return  Str::limit($this->meta_title , 60 , ' ... ');
    }
    public function updatedMetaDescription()
    {
        return  Str::limit($this->meta_description , 160 , ' ... ');
    }
    public function render()
    {
        return view('livewire.create-blog')
            ->extends('blog::layouts.app')->section('content');
    }


    public function submit()
    {

        $this->validate([
            'meta_title' => [
                'required',
                Rule::unique('blogs','meta_title')
            ],
            'title' => [
                'required',
                Rule::unique('blogs','title')
            ],
            'meta_description' => [
                'required',
                Rule::unique('blogs','meta_description')
            ],
            'seo_slug' => [
                'required',
                Rule::unique('blogs','slug')
            ],
            'content' => [
                'required',
            ],

        ],[
            'seo_slug.required' => 'Slug Is Required',
            'seo_slug.unique' => 'Slug already taken',
          //  'featured_image.dimensions' => 'Images should have a maximum width of 500 and height of 800'

        ]);

        $path = $this->featured_image->store('blog','public');

        try {



            Blog::create([
                'title' => $this->title,
                'meta_title' => $this->meta_description,
                'meta_description' => $this->meta_description,
                'content' => $this->content,
                'is_published' => $this->is_published,
                'slug' => Str::slug(Str::limit($this->seo_slug , 60 , '') , '-'),
                'featured_image' => $path,
                'published_at' => isset($this->is_published) ? now() :  null
            ]);


        }
        catch (\Exception $exception)
        {
            unlink($path);

            dd( $exception->getMessage());
        }



    }
}
