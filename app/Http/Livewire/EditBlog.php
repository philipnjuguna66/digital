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


    public bool $is_published = true;


    public Blog $blog;

    public function mount(Blog $blog)
    {
        $this->fill([
            'blog' => $blog,
            'title' => $blog->title,
            'meta_title' => $blog->meta_description,
            'meta_description' => $blog->meta_description,
            'content' => $blog->content,
            'is_published' => $blog->is_published,
            'slug' => Str::slug(Str::limit($blog->seo_slug, 60, ''), '-'),
            'published_at' => isset($blog->is_published) ? now() : null

        ]);
    }

    public function updatingSeoSlug()
    {
        $this->seo_slug = Str::limit($this->seo_slug, 75, ' ... ');
        return Str::slug($this->seo_slug, '-');
    }

    public function updatedMetaTiltle()
    {
        return Str::limit($this->meta_title, 60, ' ... ');
    }

    public function updatedMetaDescription()
    {
        return Str::limit($this->meta_description, 160, ' ... ');
    }

    public function render()
    {
        return view('livewire.create-blog');
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
            'seo_slug' => [
                'required',
                Rule::unique('blogs', 'slug')->ignore($this->blog->id)
            ],
            'content' => [
                'required',
            ],

        ], [
            'seo_slug.required' => 'Slug Is Required',
            'seo_slug.unique' => 'Slug already taken',
            //  'featured_image.dimensions' => 'Images should have a maximum width of 500 and height of 800'

        ]);

        $path = $this->featured_image->store('blog', 'public');

        try {


            $this->blog->updateQuietly([
                'title' => $this->title,
                'meta_title' => $this->meta_description,
                'meta_description' => $this->meta_description,
                'content' => $this->content,
                'is_published' => $this->is_published,
                'slug' => Str::slug(Str::limit($this->seo_slug, 60, ''), '-'),
                'featured_image' => $path,
                'published_at' => isset($this->is_published) ? now() : null
            ]);


        } catch (Exception $exception) {
            unlink($path);

            dd($exception->getMessage());
        }


    }
}
