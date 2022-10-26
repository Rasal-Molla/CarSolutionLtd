<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\ServiceCenterController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\UserController;

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

Route::get('/', [AdminController::class, 'Dashboard']);
Route::get('/user', [UserController::class, 'List']);
Route::get('/service', [ServiceController::class, 'List']);
Route::get('/category', [CategoryController::class, 'List']);
Route::get('/service-center', [ServiceCenterController::class, 'List']);
Route::get('/appointment', [AppointmentController::class, 'Appoint']);
Route::get('/payment', [PaymentController::class, 'Gateway']);
Route::get('/feedback', [FeedbackController::class, 'Message']);
Route::get('/report', [ReportController::class, 'List']);
