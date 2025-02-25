<?php

use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\DesignationController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\PayrollController;
use App\Http\Controllers\PayslipController;
use App\Http\Controllers\UserController;
use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/ping',fn()=>
    response()->json([
        'status' => 200,
        'time_stamp' => now()
    ],200)
);


# Endpoint: Department
# HTTP METHOD: GET
Route::get('/departments',[DepartmentController::class,'index']); // GET ALL
Route::post('/departments',[DepartmentController::class,'store']); // Create
Route::get('/departments/{department}',[DepartmentController::class,'show']); // Get Department by ID
Route::put('/departments/{department}', [DepartmentController::class, 'update']);
Route::delete('/departments/{department}', [DepartmentController::class, 'destroy']);


# Endpoint: Designation
# HTTP METHOD: GET
Route::get('/designations',[DesignationController::class,'index']); // GET ALL
Route::post('/designations',[DesignationController::class,'store']); // Create
Route::get('/designations/{designation}',[DesignationController::class,'show']); // Get Designation by ID
Route::put('/designations/{designation}', [DesignationController::class, 'update']);
Route::delete('/designations/{designation}', [DesignationController::class, 'destroy']);


# Endpoint: Attendance
Route::get('/attendances',[AttendanceController::class,'index']); // GET ALL
Route::post('/attendances',[AttendanceController::class,'store']);
Route::get('/attendances/{attendance}',[AttendanceController::class,'show']);
Route::put('/attendances/{attendance}',[AttendanceController::class,'update']);
Route::delete('/attendances/{attendance}',[AttendanceController::class,'destroy']);



# Endpoint: Payroll
Route::get('/payrolls',[PayrollController::class,'index']); // GET ALL
Route::post('/payrolls',[PayrollController::class,'store']);
Route::get('/payrolls/{payroll}',[PayrollController::class,'show']);
Route::put('/payrolls/{payroll}',[PayrollController::class,'update']);
Route::delete('/payrolls/{payroll}',[PayrollController::class,'destroy']);


# Endpoint: Pauslip
Route::get('/payslips',[PayslipController::class,'index']); // GET ALL
Route::post('/payslips',[PayslipController::class,'store']);
Route::get('/payslips/{payslip}',[PayslipController::class,'show']);
Route::put('/payslips/{payslip}',[PayslipController::class,'update']);
Route::delete('/payslips/{payslip}',[PayslipController::class,'destroy']);



# TODO
# Create ng Migration, model, controller,
