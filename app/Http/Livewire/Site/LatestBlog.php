<?php

namespace App\Http\Livewire\Site;

use App\Models\Blog;
use Livewire\Component;

class LatestBlog extends Component
{
    protected $readyToLoad = true;

    public function loadBlogs()
    {
        sleep(2);

        $this->readyToLoad = true;

    }
    public function render()
    {
        return view('livewire.site.latest-blog')->with([
            'blogs' => $this->readyToLoad ? Blog::query()->inRandomOrder()->limit(3)->get() : [],
        ]);
    }
}
