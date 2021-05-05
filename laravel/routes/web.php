<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Models\Article;
use App\Http\Controllers\HomeController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'show']);
Route::get('article/{id}', [ArticleController::class, 'show']);
Route::get('tag/{id}', [TagController::class, 'show']);
Route::get('category/{id}', [CategoryController::class, 'show']);


// Route::get('/articles/{article:id}', function (Article $article) {
//     return view('article', [
//         'article' => $article
//     ]);
// });

// Route::get('/blog', function () {
//     return view('posts');
// });

// Route::get('blog/{post}', function ($id) {
//     return view('post', [
//         'post' => Article::findOrFAil($id)
//     ]);
// });

//Route::resource('articles', 'BlogController');