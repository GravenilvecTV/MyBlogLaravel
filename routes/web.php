<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Affiche un article specifique grace à son numero
Route::get('/article/{id}', function (string $id) {
    return view('article', ['numeroArticle' => $id]);
});

Route::get('/articles', function () { 
    $articles = ["Python devient payant", "Goldenboy devient president", "Timothée rachete internet"];
    $nbArticles = count($articles);
    $nomDuBlog = "Blogito";
    $context = [
        'articles' => $articles,
        'nbArticles' => $nbArticles, 
        'nomDuBlog' => $nomDuBlog
    ];

    return view('articles', $context);
});