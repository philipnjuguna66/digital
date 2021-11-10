<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use Modules\Blog\Entities\Blog;

class ListBlogs extends Component
{
    use WithPagination;

    public $search = "";

    protected $queryString = [
        'search'
    ];



    public function render()
    {
        $blogs = Blog::query()
            ->when(! is_null($this->search) && ! empty($this->search), function ($query){
                $query->where('title','like','%'. $this->search. '%')
                    ->orWhere('content','like','%'. $this->search. '%');
            })->cursor();
        return view('livewire.list-blogs')->with([
            'blogs' => $blogs
        ])
            ->extends('blog::layouts.app')->section('content');
    }
}
