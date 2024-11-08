<?php

use App\Models\News;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/news', function () {
    return view('news', ['news' => News::all()]);
});

Route::get('/news/{news:slug}', function (News $news){
    return view('news-detail', ['item' => $news]);
});


