<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\EmployeeController;

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

Route::apiResource('employees', EmployeeController::class);

// GET /api/employees - List all employees

// POST /api/employees - Create new employee

// GET /api/employees/{employee} - Get single employee

// PUT/PATCH /api/employees/{employee} - Update employee

// DELETE /api/employees/{employee} - Delete employee
