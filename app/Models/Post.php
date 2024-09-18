<?php

namespace App\Models;
use Illuminate\Support\Arr;

class Post {
    public static function all() {
        return [
            [
                'id' => '1',
                'slug' => 'judul-artikel-1',
                'title' => 'Judul Artikel 1',
                'author' => 'Haikal Athallarik',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit fugiat neque dignissimos animi. Nihil fugit veniam accusamus. Molestias vel distinctio, delectus ipsam dignissimos quis minima accusamus molestiae quaerat dolorem nam!'
            ],

            [
                'id' => '2',
                'slug' => 'judul-artikel-2',
                'title' => 'Judul Artikel 2',
                'author' => 'Haikal Athallarik',
                'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consequuntur at ipsum tempore quisquam. Itaque, mollitia libero quo magni id fuga eveniet quas totam fugit quisquam nam qui repudiandae tempora inventore!'
            ]
        ];
    }

    public static function find($slug) {
        $post =  Arr::first(static::all(), fn ($post) => $post['slug'] == $slug);
        if(!$post) {
            abort(404);
        }
        return $post;
    }
}
?>