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
    return view('index');
});

Route::get('/about-us.html', function () {
    return view('about-us');
});

Route::get('/blog.html', function () {
    return view('blog');
});

Route::get('/contact.html', function () {
    return view('contact');
});

Route::get('/departments.html', function () {
    return view('departments');
});

Route::get('/doctors.html', function () {
    return view('doctors');
});

Route::get('/elements.html', function () {
    return view('elements');
});

Route::get('/index.html', function () {
    return view('index');
});

Route::get('/single-blog.html', function () {
    return view('single-blog');
});