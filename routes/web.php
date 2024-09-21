<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Home', ['title' => 'Home']);
});

# Way: 1
Route::get('/about', function(){
    return Inertia::render('About', ['title' => 'About']);
});

# Way: 2 // using helper function
Route::get('/blog', function(){
    return inertia('Blog', ['title' => 'Blog']); 
});

# Way: 3
Route::inertia('/services', 'Services', ['title' => "Services"]);  
Route::inertia('/contact', 'Contact', ['title' => "Contact"]);