<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Home');
});

# Way: 1
Route::get('/about', function(){
    return Inertia::render('About');
});

# Way: 2
Route::get('/blog', function(){
    return inertia('Blog', ['user' => 'Mostakim']); // using helper function
});

# Way: 2
Route::inertia('/services', 'Services', ['title' => "Services"]); // 