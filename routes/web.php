<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/home', function() {
    return view('home');
});

Route::get('/about', function() {
    return view('aboutotun');
});

Route::get('/contact', function() {
    return view('contactotun');
});

Route::get('/t', function () {
    return view('t');
});
