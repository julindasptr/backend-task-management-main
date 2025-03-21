<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::get('/tasks', [TaskController::class, 'getTasks']);
Route::post('/tasks/create', [TaskController::class, 'createTask']);
Route::get('/employees', [TaskController::class, 'getEmployees']);
Route::delete('/tasks/{id}', [TaskController::class, 'deleteTask']);
