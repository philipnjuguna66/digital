<?php

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;
use Maatwebsite\Excel\Facades\Excel;
use Modules\Blog\Entities\Blog;
use Modules\Blog\Http\Controllers\BlogController;
use Spatie\Sitemap\SitemapGenerator;

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

Route::get('/sitemap.xml', function (){

    return SitemapGenerator::create(url('/'))->getSitemap()->writeToDisk('public', 'sitemap.xml');


});


Route::get('/privacy-policy', function (){
    return view('privacy-policy');
});


Route::get('/', [BlogController::class ,'index'])->name('blog.index');
Route::get('/{blog:slug}', [BlogController::class ,'show'])->name('blog.show');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
