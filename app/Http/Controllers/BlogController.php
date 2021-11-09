<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Modules\Blog\Entities\Blog;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $blogs = Blog::query()->latest('id')->published()->paginate(10);

        return view('blog::index')->with([
            'blogs' => $blogs
        ]);
    }




    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show(Blog $blog)
    {
        return view('blog::show')->with([
            'blog' => $blog
        ]);
    }

}
