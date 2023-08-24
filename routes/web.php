<?php

use App\Http\Controllers\Admin\DepartmentController;
use App\Http\Controllers\Admin\EmployeeController;
use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['prefix'=>'admin'] ,function (){

    // Route::get('employees', [EmployeeController::class,'index'])->name('employees.index');
    // Route::get('employees/create', [EmployeeController::class,'create'])->name('employees.create');
    // Route::post('employees', [EmployeeController::class,'store'])->name('employees.store');
    Route::get('employees/archive',[EmployeeController::class,'archive'])->name('employees.archive');
    Route::post('employees/restore/{employee}',[EmployeeController::class,'restore'])->name('employees.restore');
    Route::delete('employees/deleteArchive/{employee}',[EmployeeController::class,'deleteArchive'])->name('employees.deleteArchive');
    Route::resources([
        'employees'=>EmployeeController::class,
        'departments'=>DepartmentController::class,

    ]);
});

