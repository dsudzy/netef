<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
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

// Homepage route
Route::get('/', [PageController::class, 'getHomepage']);

// Route::get('{page}', [PageController::class, 'getPage'])->where("page", "^((?!home).)*$");

// Xml Sitemap
Route::get('sitemap.xml', [XmlSitemapController::class, 'generate']);

// Flush Cache
Route::get('/flush-c', function () {
    Cache::flush();
    return redirect('/');
});


