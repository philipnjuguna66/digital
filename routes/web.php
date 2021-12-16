<?php


use App\Http\Controllers\BlogController;

use Illuminate\Support\Facades\Route;

use Modules\Blog\Entities\GenerateKeywordIdeas;
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


Route::get('/', [\App\Http\Controllers\HomeController::class,'index'])->name('home');

Route::get('/about-us', \App\Http\Livewire\Site\SeoAudit::class)->name('about_us');


Route::prefix('services')->group(function (){
    Route::get('/seo-optimization', function () {
        return view('site.seo_optimization');
    })->name('seo_optimization');

    Route::get('/seo-marketing', function () {
        return view('site.seo_marketing');
    })->name('seo_marketing');

    Route::get('/web-design', function () {
        return view('site.web_design');
    })->name('web_design');


});

Route::prefix('blog')->group(function (){


    Route::get('/', [BlogController::class,'index'])->name('blog');
    Route::get('/{blog:slug}', [BlogController::class,'show'])->name('blog.show');


});






Route::get('/contact-us', function () {

    return view('site.contact');
})->name('contact_us');



Route::get('/keyword-generator', function () {

   dd( json_decode(GenerateKeywordIdeas::main()));


    //return view('welcome');
})->name('keyword_generator');



Route::get('/privacy', function () {
    return view('privacy-policy');
})->name('privacy');


Route::get('/terms-and-condition', function () {
    return view('terms_and_conditions');
})->name('terms-and-conditions');


Route::get('/{blog:slug}', [\App\Http\Controllers\HomeController::class,'notFound']);


