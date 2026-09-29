<?php

use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Facades\Route;

Route::get('/employees', [EmployeeController::class, 'index']);

Route::get('/employees/create', [EmployeeController::class, 'create']);

Route::post('/employees', [EmployeeController::class, 'store']);

Route::get('/employees/{id}', [EmployeeController::class, 'show']);

Route::get('/employees/{id}/edit', [EmployeeController::class, 'edit']);

Route::put('/employees/{id}', [EmployeeController::class, 'update']);

Route::delete('/employees/{id}', [EmployeeController::class, 'delete']);
