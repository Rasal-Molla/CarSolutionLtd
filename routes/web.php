<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CarModelController;
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
Route::get('/user/create-user', [UserController::class, 'Create'])->name('user.create');
Route::post('/user/form', [UserController::class, 'Form'])->name('user.form');


Route::get('/service', [ServiceController::class, 'List']);
Route::get('/service/create', [ServiceController::class, 'Create'])->name('service.create');
Route::post('/service/form', [ServiceController::class, 'Form'])->name('service.form');


Route::get('/category', [CategoryController::class, 'List']);
Route::get('/category/create-category', [CategoryController::class, 'CreateCategory'])->name('category.create');
Route::post('/category/create-category/category-form', [CategoryController::class, 'Form'])->name('category.form');


Route::get('/brand', [BrandController::class, 'List']);
Route::get('/brand/create', [BrandController::class, 'Create'])->name('brand.create');
Route::post('/brand/form', [BrandController::class, 'Form'])->name('brand.form');


Route::get('/model', [CarModelController::class, 'List']);
Route::get('/model/create', [CarModelController::class, 'Create'])->name('model.create');
Route::post('/model/form', [CarModelController::class, 'Form'])->name('model.form');


Route::get('/service-center', [ServiceCenterController::class, 'List']);
Route::get('/service-center/make', [ServiceCenterController::class, 'Make'])->name('servicecenter.make');
Route::post('/service-center/form', [ServiceCenterController::class, 'Form'])->name('servicecenter.form');
Route::get('/service-center/total', [ServiceCenterController::class, 'Total'])->name('servicecenter.total');
Route::get('/service-center/pending', [ServiceCenterController::class, 'Pending'])->name('servicecenter.pending');
Route::get('/service-center/ratting', [ServiceCenterController::class, 'Ratting'])->name('servicecenter.ratting');


Route::get('/appointment', [AppointmentController::class, 'Appoint']);
Route::get('/appointment/create', [AppointmentController::class, 'Create'])->name('appointment.create');
Route::post('/appointment/form', [AppointmentController::class, 'Form'])->name('appointment.form');


Route::get('/payment', [PaymentController::class, 'Gateway']);
Route::get('/feedback', [FeedbackController::class, 'Message']);
Route::get('/report', [ReportController::class, 'List']);
