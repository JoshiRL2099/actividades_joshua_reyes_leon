<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/superheroes', function () {
    return view('superheroes');
});

Route::get('/universes', function () {
    return view('universes');
});

Route::get('/superpowers', function () {
    return view('superpowers');
});