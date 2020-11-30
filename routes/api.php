<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('checkClinic', [App\Http\Controllers\ServiceController::class, 'checkClinic']);
Route::post('checkEditClinic1', [App\Http\Controllers\ServiceController::class, 'checkEditClinic1']);
Route::post('checkDeleteClinic', [App\Http\Controllers\ServiceController::class, 'checkDeleteClinic']);
Route::post('checkEditClinic2', [App\Http\Controllers\ServiceController::class, 'checkEditClinic2']);
Route::post('checkCodeDoctor', [App\Http\Controllers\DoctorController::class, 'checkCodeDoctor']);
Route::post('checkCodeDoctor1', [App\Http\Controllers\DoctorController::class, 'checkCodeDoctor1']);
Route::post('findDoctor', [App\Http\Controllers\FrontEndSchedule::class, 'findDoctor']);
Route::post('checkBookSchedule', [App\Http\Controllers\FrontEndSchedule::class, 'checkSchedule']);
Route::post('passDate', [App\Http\Controllers\ScheduleController::class, 'index']);
Route::post('checkSchedule', [App\Http\Controllers\ScheduleController::class, 'checkSchedule']);
Route::post('findDoctor', [App\Http\Controllers\ScheduleController::class, 'findDoctor']);
Route::post('checkDoctorExisit', [App\Http\Controllers\UserController::class, 'checkDoctorExisit']);
Route::post('checkEmailExisit', [App\Http\Controllers\UserController::class, 'checkEmailExisit']);
