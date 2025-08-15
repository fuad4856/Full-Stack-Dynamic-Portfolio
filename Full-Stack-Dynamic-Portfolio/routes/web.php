<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/portfolio', function () {
    return view('portfolio');
});

// Auth Routes
Route::get('/login', function () {
    return view('auth.login');
})->name('auth.login');

Route::post('/login', function () {
    // Handle login logic here
    return redirect()->route('home');
})->name('auth.login.submit');

Route::get('/register', function () {
    return view('auth.register');
})->name('auth.register');

Route::post('/logout', function () {
    // Handle logout logic here
    return redirect()->route('home');
})->name('auth.logout');

// Admin Routes
Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->name('admin.dashboard');
