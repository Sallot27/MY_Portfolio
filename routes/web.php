<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::post('/contact/submit', [ContactController::class, 'submit'])->name('contact.submit');

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact'); 
})->name('contact');

Route::get('/portfolio', function () {
    return view('portfolio');
});

Route::get('/skills', function () {
    return view('skills');
});

Route::get('/create', function () {
    return view('create');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/service', function () {
    return view('service');
    });



