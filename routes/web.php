<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home']);
});

Route::get('/about', function () {
    return view('about', ['name' => 'Kurniawan', 'title' => 'About']);
});

// buat 2 route baru
//1. /blog
// 2. 2 buah artikel ,yang menampilkan judul dan isi
// buat route contact

Route::get('/blog', function () {
    return view('blog', ['title' => 'Blog']);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});


