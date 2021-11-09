<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request  $request)
    {
        return view('welcome');
    }

    public function notFound(Blog $blog)
    {

        return view('blog::show')->with([
            'blog' => $blog
        ]);
    }
}
