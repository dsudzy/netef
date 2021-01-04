<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\XmlSitemapController;
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

// Route::get('{page}', [PageController::class, 'getPage'])->where("page", "^((?!home).)*$");

// Xml Sitemap
Route::get('sitemap.xml', [XmlSitemapController::class, 'generate']);

// Flush Cache
Route::get('/flush-c', function () {
    Cache::flush();
    return redirect('/');
});


