<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\BranchController;
use App\Http\Controllers\DepartmentController;

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

// Login
Route::get('/', [LoginController::class, 'index'])->name('login');
Route::post('verify', [LoginController::class, 'verify'])->name('verify'); 

//logout
Route::get('logout', [LoginController::class, 'logout'])->name('logout');


// dashboard
Route::get('dashboard', [LoginController::class, 'dashboard'])->name('dashboard');


// users
Route::resource('users', UserController::class);

// employees
Route::resource('employees', EmployeeController::class);

// companies
Route::resource('branches', BranchController::class);

// departments
Route::resource('departments', DepartmentController::class);