<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/tasks', function () {
    return response()->json(['message' => 'API is working!']);
});

Route::get('/tasks', [TaskController::class, 'index']);  // Get all tasks
Route::post('/tasks', [TaskController::class, 'store']); // Create a new task
Route::get('/tasks/{id}', [TaskController::class, 'show']); // Get a single task
Route::put('/tasks/{task}', [TaskController::class, 'update']); // Update a task
Route::delete('/tasks/{task}', [TaskController::class, 'destroy']); // Delete a task

                 
