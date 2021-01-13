<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    HomepageController,
    WhoWeSupportController,
    GrantsController,
    AboutUsController,
    XmlSitemapController
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

Route::get("/admin", function(){
    return redirect('/wordpress/wp-login.php');
});

// Homepage route
Route::get('/', [HomepageController::class, 'getHomepage']);

Route::get('who-we-support', [WhoWeSupportController::class, 'getPage']);

Route::get('grants', [GrantsController::class, 'getPage']);

Route::get('about-us', [AboutUsController::class, 'getPage']);

Route::get('our-stories', [AboutUsController::class, 'getPage']);

// Xml Sitemap
Route::get('sitemap.xml', [XmlSitemapController::class, 'generate']);

// Flush Cache
Route::get('/flush-c', function () {
    Cache::flush();
    return redirect('/');
});


