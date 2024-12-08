<?php

use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Models\Employee;

Route::get('/', function () {
    return view('welcome');
});





Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/users', [UsersController::class, 'index'])->name('users.index');
Route::get('/filter', [EmployeeController::class, 'filter']);
Route::resource('/employees', EmployeeController::class);
