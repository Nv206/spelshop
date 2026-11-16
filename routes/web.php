<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('home');
});
//hieronder nog routes toevoegen voor /over en /contact

Route::get('/over', function () {
    return view('over');
});
Route::get('/contact', function () {
    return view('contact');
});