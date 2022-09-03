<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// ======= get all employee details ========================
Route::get('employees',[EmployeeController::class,'employeeData']);

// ======= get specific employee details ====================
Route::get('employees/{id}',[EmployeeController::class,'employeespecificData']);

// ========== Add Employee from db ======================
Route::post('addEmployee',[EmployeeController::class,'addemployeeData']);

// ========== Update Employee from db ======================
Route::put('updateEmployee/{id}',[EmployeeController::class,'updateemployeeData']);

// ========== Delete Employee from db ======================
Route::delete('deleteEmployee/{id}',[EmployeeController::class,'deleteemployeeData']);



