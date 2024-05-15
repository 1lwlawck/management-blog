<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home']);
});

Route::get('/about', function () {
    return view('about', ['name' => 'Kurniawan', 'title' => 'About']);
});

Route::get('/posts', function () {
    return view('posts', [
        'title' => 'Blog',
        'posts' => [
            [
                'id' => 1,
                'slug' => 'judul-artikel-1',
                'title' => 'Judul Artikel 1',
                'author' => 'Deny Faishal Ardiyanto',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo sit modi quas vitae
            accusantium nam illum quos
            doloremque, iure fugiat odit, aspernatur ad at maiores optio nostrum repellat reiciendis sunt?'
            ],
            [
                'id' => 2,
                'slug' => 'judul-artikel-2',
                'title' => 'Judul Artikel 2',
                'author' => 'Deny Faishal Ardiyanto',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo sit modi quas vitae
            accusantium nam illum quos
            doloremque, iure fugiat odit, aspernatur ad at maiores optio nostrum repellat reiciendis sunt? Lorem, ipsum
            dolor sit amet consectetur adipisicing elit. Saepe, nesciunt praesentium blanditiis, nihil eligendi sed
            dignissimos veniam similique sapiente, illum quo repellendus id quae? Possimus iure dolorem inventore
            facilis facere.'
            ],
        ],
    ]);
});

Route::get('/posts/{slug}', function ($slug) {
    $posts = [
        [
            'id' => 1,
            'slug' => 'judul-artikel-1',
            'title' => 'Judul Artikel 1',
            'author' => 'Deny Faishal Ardiyanto',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo sit modi quas vitae
            accusantium nam illum quos
            doloremque, iure fugiat odit, aspernatur ad at maiores optio nostrum repellat reiciendis sunt?'
        ],
        [
            'id' => 2,
            'title' => 'Judul Artikel 2',
            'slug' => 'judul-artikel-2',
            'author' => 'Deny Faishal Ardiyanto',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo sit modi quas vitae
            accusantium nam illum quos
            doloremque, iure fugiat odit, aspernatur ad at maiores optio nostrum repellat reiciendis sunt? Lorem, ipsum
            dolor sit amet consectetur adipisicing elit. Saepe, nesciunt praesentium blanditiis, nihil eligendi sed
            dignissimos veniam similique sapiente, illum quo repellendus id quae? Possimus iure dolorem inventore
            facilis facere.'
        ],
    ];

    $post = Arr::first($posts, function ($post) use ($slug) {
        return $post['slug'] == $slug;
    });

    return view('post', [
        'title' => 'Single Post',
        'post' => $post
    ]);

});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});


