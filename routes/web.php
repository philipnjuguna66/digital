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

    return SitemapGenerator::create("https://digitalmarketingkenya.com")->getSitemap()->writeToDisk('public', 'sitemap.xml');
});


Route::get('/', function () {
    return view('welcome');
})->name('home');




Route::get('/about-us', function () {
    return view('welcome');
})->name('about_us');



Route::prefix('services')->group(function (){
    Route::get('/seo-optimization', function () {
        return view('welcome');
    })->name('seo_optimization');

    Route::get('/seo-marketing', function () {
        return view('welcome');
    })->name('seo_marketing');

    Route::get('/web-design', function () {
        return view('welcome');
    })->name('web_design');


});



Route::get('/blog', function () {
    return view('welcome');
})->name('blog');


Route::get('/contact-us', function () {
    return view('welcome');
})->name('contact_us');



Route::get('/privacy', function () {
    return view('welcome');
})->name('privacy');


Route::get('/terms-and-condition', function () {
    return view('welcome');
})->name('terms-and-conditions');


