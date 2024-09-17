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

Route::get('/index', function () {
    return view('index');
    
});
Route::get('/home', function () {
    return view('home');
    
});
Route::get('/login', function () {
    return view('login');
    
});
Route::get('/register', function () {
    return view('register');
    
});
Route::get('/blog', function () {
    return view('blog');
    
});
Route::get('/contact', function () {
    return view('contact');
    
});
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
