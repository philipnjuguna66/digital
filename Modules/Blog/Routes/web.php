<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Modules\Blog\Http\Controllers\BlogController;
use Modules\Blog\Http\Controllers\CreateBlogController;



/**
 * Manage Blogs
 */


Route::prefix('wp-admin/blog')->group(function() {
    Route::get('/', [CreateBlogController::class,'index'])->name('manage.blog.index');
    Route::get('/edit/{blog}', [CreateBlogController::class,'edit'])->name('manage.blog.edit');
    Route::get('/show/{blog}', [CreateBlogController::class,'show'])->name('manage.blog.show');

});



