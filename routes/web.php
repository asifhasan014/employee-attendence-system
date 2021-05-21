<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\AttendenceController;
use Illuminate\Support\Facades\Auth;

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
    return view('auth.login');
});
Auth::routes(['register' => false]);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware'=>"auth"], function () {
    Route::get('/mainHome', [MainController::class, 'mainHome'])->name('mainHome');
    Route::get('/attendenceDetails', [AttendenceController::class, 'index'])->name('attendenceDetails');
    Route::get('/attendenceDetailsData', [AttendenceController::class, 'getTodayAttendenceDetails'])->name('attendenceDetailsData');
    Route::get('/attendenceTaker', [AttendenceController::class, 'attendenceTaker'])->name('attendenceTaker');
    Route::get('/dashboard', [EmployeeController::class, 'dashboard'])->name('dashboard');
    Route::post('/createEmployee', [EmployeeController::class, 'createEmployee'])->name('createEmployee');
});

