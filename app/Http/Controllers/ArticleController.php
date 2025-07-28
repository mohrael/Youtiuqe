<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    //
    public function allArticles(){
        $articles = Article::all();
        return view('articles', ['articles' => $articles]);
    }
}


