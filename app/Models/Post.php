<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Post
{
    public static function all()
    {
        return [
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
        ];


    }
    public static function find($slug)
    {


        $post = Arr::first(static::all(), fn($post) => $post['slug'] === $slug);
        if (!$post) {
            abort(404);
        }


        return $post;
    }
}
?>