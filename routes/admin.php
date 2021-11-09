<?php
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['auth:sanctum'], 'prefix' => 'wp-admin' ], function () {

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');


    Route::get('/listing', function () {


        Excel::import(new \App\Imports\BlogImport(), public_path('wp_posts_view.csv'));

        foreach (Blog::all() as $blog) {
            $blog->slug = Str::of($blog->title)->slug('-');
            $blog->saveQuietly();
        }

    });


});
