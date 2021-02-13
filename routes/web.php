<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\HttpSuperSimpleAuth;
use App\Http\Controllers\{
    HomepageController,
    OurStoriesController,
    XmlSitemapController,
    PageController,
    ContactController
};

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

Route::middleware([HttpSuperSimpleAuth::class])->group(function () {
    Route::get("/admin", function() {
        return redirect('/wordpress/wp-login.php');
    });
    
    // Homepage route
    Route::get('/', [HomepageController::class, 'getHomepage']);

    Route::get('/our-stories/{post}', [OurStoriesController::class, 'getPost']);

    Route::get('/our-stories', [OurStoriesController::class, 'getPage']);

    Route::get('/contact-us', [ContactController::class, 'getPage']);

    Route::get('/donate', function() {
        return view('donate');
    });

    Route::get('/{page_name}', [PageController::class, 'getPage']);
    
    // Xml Sitemap
    Route::get('sitemap.xml', [XmlSitemapController::class, 'generate']);
    
    // Flush Cache
    Route::get('/flush-c', function () {
        Cache::flush();
        return redirect('/');
    });
});
