<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class HomeController extends Controller
{
    public function show() {
        $article= Article::orderBy('published_at', 'desc');
        return view('home', ['articles' => $article]);
    }

    
}
