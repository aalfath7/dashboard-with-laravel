<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

class News{
    public static function all(){
        return [
            [
                'id' => '1',
                'slug' => 'hari-ini-saya-membuat-database',
                'title' => 'Hari ini saya membuat database',
                'author' => 'farhan',
                'content' => 'saya membuat aplikasi menggunakan laravel dengan database sqlite dan mulai belajar cara menggunakannya.'
            ],
            [
                'id' => '2',
                'slug' => 'hari-ini-saya-membuat-tampilan-aplikasi',
                'title' => 'Hari ini saya membuat tampilan aplikasi',
                'author' => 'farhan',
                'content' => 'saya membuat tampilan aplikasi menggunakan framework laravel, salah satu framework bahasa pemrograman PHP.'
            ],
        ];
    }
}

Route::get('/', function () {
    return view('home');
});

Route::get('/news', function () {
    return view('news', ['news' => News::all()]);
});

Route::get('/news/{slug}', function ($slug){
    $item = Arr::first(News::all(), function($item) use ($slug){
        return $item['slug'] == $slug;
    });

    return view('news-detail', ['item' => $item]);
});


