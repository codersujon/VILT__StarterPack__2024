<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Home', ['title' => 'Home']);
})->name('home');

# Way: 1
Route::get('/about', function(){
    return Inertia::render('About', ['title' => 'About']);
})->name('about');

# Way: 2 // using helper function
Route::get('/blog', function(){
    return inertia('Blog', ['title' => 'Blog']); 
})->name('blog');

# Way: 3
Route::inertia('/services', 'Services', ['title' => "Services"])->name('services');  
Route::inertia('/contact', 'Contact', ['title' => "Contact"])->name('contact');