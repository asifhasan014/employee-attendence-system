<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\AttendenceController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [HomeController::class, 'home'])->name('home');
Route::get('/attendenceDetails', [AttendenceController::class, 'attendenceDetails'])->name('attendenceDetails');
Route::get('/attendenceTaker', [AttendenceController::class, 'attendenceTaker'])->name('attendenceTaker');
Route::get('/dashboard', [EmployeeController::class, 'dashboard'])->name('dashboard');
Route::post('/createEmployee', [EmployeeController::class, 'createEmployee'])->name('createEmployee');