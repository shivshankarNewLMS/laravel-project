<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
    return view('welcome');
});

Route::get('/test', function () {
    return view('test');
});

Route::get('/menu', function () {
    return view('menu');
});

Route::get('/category', function () {
    return view('category');
});
Route::get('/logout', function () {
    return view('logout');
});

Route::get('/logout1', function () {
    return view('logout1');
});

Route::get('/logout12', function () {
    return view('logout12');
});
