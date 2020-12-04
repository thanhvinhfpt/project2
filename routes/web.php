<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\DashBoardController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\FrontEndSchedule;
use App\Http\Controllers\FrontEndController;
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

// frontend
Route::get('/',[FrontEndController::class,'home'] )->name('homefrontEnd');
Route::get('/home/{tagName}',[FrontEndController::class,'showListPost'])->name('lsPost');
Route::get('/list-doctors',[FrontEndController::class,'showListDoctor']);
Route::get('/lang/{locale}',[\App\Http\Controllers\LocalizationController::class,'index'] );
Route::get('/frontEnd/{id}',[FrontEndController::class,'show'] )->name('FrontendPost');

Route::get('/BookingExamination', [App\Http\Controllers\FrontEndSchedule::class, 'index'])->name('bookSchedule');
Route::post('/ExaminationStore', [App\Http\Controllers\FrontEndSchedule::class, 'store'])->name('bookScheduleStore');




// backend


Auth::routes();
Route::get('/admin', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('/users', UserController::class);
Route::resource('/doctors', DoctorController::class);
Route::resource('/services', ServiceController::class);
Route::resource('/dashboards', DashBoardController::class);
Route::resource('/schedules', ScheduleController::class);
Route::resource('/employees', EmployeeController::class);
Route::resource('/post', PostController::class);
Route::resource('/tag', TagController::class);
