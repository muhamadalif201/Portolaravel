<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/portfolio', function () {
    return view('portfolio');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/index', function () {
    return view('index');
});
