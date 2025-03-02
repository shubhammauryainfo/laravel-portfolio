<?php

use Illuminate\Support\Facades\Route;

Route::get('/intro', function () {
    return view('intro');
});

Route::get('/', function () {
    return view('home');
});
