<?php

use App\Http\Controllers\AppointmentController;

use App\Http\Controllers\AuthController;
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

Route::get('/about-us', function () {
    return view('about-us');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/departments', function () {
    return view('departments');
});

Route::get('/doctors', function () {
    return view('doctors');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/single-blog', function () {
    return view('single-blog');
});


Route::get('dashboard',[AuthController::class,'dashboard'])->name('dashboard') ;



Route::get('login',[AuthController::class ,'login'])->name('login');
Route::get('register',[AuthController::class ,'register'])->name('register');

Route::get('/appointment', [AppointmentController::class, 'index']);

Route::post('/appointment', 'AppointmentController@store')->name('appointments.store');





