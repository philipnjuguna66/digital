<?php

namespace App\Http\Livewire;

use Exception;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use Livewire\Component;
use Livewire\WithFileUploads;
use Modules\Blog\Entities\Blog;

class EditBlog extends Component
{

    use WithFileUploads;

    public $title;

    public $meta_description;

    public $meta_title;


    public $seo_slug;


    public $content;


    public $featured_image;

    public $featured_image_path;


    public bool $is_published = true;


    public Blog $blog;

    public function mount(Blog $blog)
    {
        $this->fill([
            'blog' => $blog,
            'title' => $blog->title,
            'meta_title' => $blog->meta_title,
            'featured_image_path' => $blog->featured_image_path,
            'meta_description' => $blog->meta_description,
            'content' => $blog->content,
            'is_published' => $blog->is_published,
            'slug' => Str::slug(Str::limit($blog->seo_slug ?  : $this->title, 60, ''), '-'),
            'published_at' => isset($blog->is_published) ? now() : null

        ]);
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
                Rule::unique('blogs', 'meta_title')->ignore($this->blog->id)
            ],
            'title' => [
                'required',
                Rule::unique('blogs', 'title')->ignore($this->blog->id)
            ],
            'meta_description' => [
                'required',
                Rule::unique('blogs', 'meta_description')->ignore($this->blog->id)
            ],
            'content' => [
                'required',
            ],

        ], [
            'seo_slug.required' => 'Slug Is Required',
            'seo_slug.unique' => 'Slug already taken',
            //  'featured_image.dimensions' => 'Images should have a maximum width of 500 and height of 800'

        ]);

        if (file_exists(storage_path($this->blog->featured_image)))
        {
            unlink(storage_path($this->blog->featured_image));

        }


        try {


            $this->blog->updateQuietly([
                'title' => $this->title,
                'meta_title' => $this->meta_title,
                'meta_description' => $this->meta_description,
                'content' => $this->content,
                'is_published' => $this->is_published,
                'published_at' => isset($this->is_published) ? now() : null
            ]);


            if ($this->featured_image)
            {
                $path =  $this->featured_image->store('blog', 'public');

                $this->blog->updateQuietly([
                    'featured_image' => $path
                ]);
            }

            $this->blog->fresh();

            $this->featured_image_path = $this->blog->featured_image_path;



        } catch (Exception $exception) {


            dd($exception->getMessage());
        }


    }
}
