<?php

use App\Http\Controllers\AllServicesController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PopularController;
use Illuminate\Support\Facades\Route;
use App\Models\Article;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ServByDateController;
use App\Http\Controllers\ServByPriceController;
use App\Http\Controllers\SingleServiceController;
use App\Http\Middleware\RequestLoggerMiddleware;
use App\Services\AbstractRequestLogger;

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


Route::get('/', [PopularController::class, 'index']);
Route::get('/services/all', [AllServicesController::class, 'index']);
Route::get('/services/date', [ServByDateController::class, 'index']);
Route::get('/services/price', [ServByPriceController::class, 'index']);
Route::get('/services/{id}', [SingleServiceController::class, 'index']);
Route::get('/articles', [HomeController::class, 'index']);
Route::get('/contact', ['uses'=> function()
{
    return view('pages.contact');
}, 'middleware' => RequestLoggerMiddleware::class]);
// Route::post('/contact', [ContactController::class, 'contact'])->name('contact.send');
Route::get('/articles/{id}',[ArticleController::class, 'index']);
Route::get('/tags/{id}', [TagController::class, 'index']);
Route::get('categories/{id}', [CategoryController::class, 'index']);

Route::post('/contact', \App\Http\Controllers\ContactFormController::class);



// Route::get('/mailContactUs', function () {
//     return view('contactUs');});

Route::get('/cart', function() {
    return view('pages.cart');
});

Route::get('/about', function () {
    return view('pages.about');});

    Route::get('/terms', function () {
        return view('pages.terms');
});




