<?php

use App\Http\Controllers\EmployeeController;
use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// Route::get('employees', [EmployeeController::class, 'index']);
Route::apiResource('/employees', App\Http\Controllers\Api\EmployeeController::class);
