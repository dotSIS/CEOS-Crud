<?php

use App\Http\Controllers\StudentsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

// Students API Endpoints
Route::prefix('students')->group(function () {
    // Create a new student
    Route::post('/create', [StudentsController::class, 'create']);

    // Retrieve all students
    Route::get('/read', [StudentsController::class, 'read']);

    // Update a student's information by ID
    Route::put('/update/{id}', [StudentsController::class, 'update']);

    // Delete a student by ID
    Route::delete('/delete/{id}', [StudentsController::class, 'delete']);
});
