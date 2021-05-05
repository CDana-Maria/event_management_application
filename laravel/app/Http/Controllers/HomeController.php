<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class HomeController extends Controller
{
    public function show() {
        $article= Article::whereNotNull('modified_at')->OrderBy('created_at', 'desc')->get();
        return view('home', ['articles' => $article]);
    }
    

    
}
