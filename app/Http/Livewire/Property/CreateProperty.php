<?php

namespace App\Http\Livewire\Property;

use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use Livewire\Component;
use Livewire\WithFileUploads;
use Modules\Blog\Entities\Blog;
use Modules\Property\Entities\Property;

class CreateProperty extends Component
{

    use WithFileUploads;

    public $title;

    public float  $price = 0;

    public  $location ;


    public  $meta_description;

    public $meta_title;


    public $seo_slug;


    public $content;


    public $photos;


    public bool $is_published = true;



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
            'price' => [
                'required',
            ],
            'location' => [
                'required',
            ],
            'photos.*' => [
                'required',
                'image',
                Rule::dimensions()->maxWidth(600)->maxHeight(900),
                'max:1024'

            ],
        ],[
            'seo_slug.required' => 'Slug Is Required',
            'seo_slug.unique' => 'Slug already taken',
            'photos.*.dimensions' => 'Images should have a maximum width of 500 and height of 800'

        ]);


        try {



           $property =  Property::create([
                'title' => $this->title,
                'price' => $this->price,
                'location' => $this->location,
                'meta_title' => $this->meta_description,
                'meta_description' => $this->meta_description,
                'content' => $this->content,
                'is_published' => $this->is_published,
                'slug' => Str::slug(Str::limit($this->seo_slug , 60 , '') , '-'),
                'published_at' => isset($this->is_published) ? now() :  null
            ]);


            foreach ($this->photos as $photo) {
                $path = $photo->store('property' , 'public');
                $property->photos()->create([
                    'path' => $path
                ]);
            }

            $this->redirect(route('manage.property.index'));
        }
        catch (\Exception $exception)
        {
          //  unlink($path);

            dump( $exception->getMessage());
        }



    }
    public function render()
    {
        return view('livewire.property.create-property');
    }
}
