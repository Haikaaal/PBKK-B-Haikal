<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About Page'], ['nama' => 'Haikal Athallarik']);
});

Route::get('/blog', function () {
    return view('blog', ['title' => 'Blog page']);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact Page']);
});