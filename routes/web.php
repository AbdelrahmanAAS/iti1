<?php

use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\Admin\DepartmentController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Models\Department;
use App\Models\Doctor;
use App\Http\Controllers\Admin\EmployeeController;
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

Route::get('/home', function () {
    return view('dashboard/index');
});

Route::get('about-us', function () {
    return view('about-us');
});

Route::get('blog', function () {
    return view('blog');
});

Route::get('contact', function () {
    return view('contact');
});

Route::get('single-blog', function () {
    return view('single-blog');
});

Route::get('appointment', [AppointmentController::class, 'index']);

Route::prefix('departments')->group(function () {

    Route::get('/', [DepartmentController::class,'index']);
  

    Route::get('/index', [DepartmentController::class, 'index']);

    Route::post('/add', [DepartmentController::class, 'add']);

    Route::get('/edit/{}', [DepartmentController::class, 'update']);

});

Route::post('/logins', [AuthController::class, 'login']);

Route::get('/logout', [AuthController::class, 'logout']);

Route::prefix('dashboard')->group(function(){

    Route::get('/', function(){return view('dashboard.login');})->name('login');

    Route::get('/dashboard', function(){ return view('dashboard.dashboard',['user'=>auth()->user()],[EmployeeController::class,'doc']);})->middleware('auth');

    Route::post('/dashboard/add', [EmployeeController::class,'create'])->name('Doctor.add')->middleware('auth');

    Route::post('/dashboard/edit', [EmployeeController::class,'edit'])->name('Doctor.edit')->middleware('auth');

})->middleware('auth');


Route::prefix('doctors')->group(function () {

    Route::get('/', [EmployeeController::class,'doc']);

    Route::get('/store',[EmployeeController::class,'store']);

});



