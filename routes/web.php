<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\Frontend\HomeAboutController;
use App\Http\Controllers\Frontend\HomeBookingController;
use App\Http\Controllers\Frontend\HomeBrandController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\HomeServiceCenter;
use App\Http\Controllers\Frontend\HomeServiceCenterController;
use App\Http\Controllers\Frontend\HomeServiceController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\ServiceCenterController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\UserController;
use Illuminate\Routing\Controllers\Middleware;

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

// Frontend panel route start here
Route::get('/user/login', [UserController::class, 'Userlogin'])->name('user.login');
Route::get('/', [HomeController::class, 'Home'])->name('Home');
Route::get('/service-center', [HomeServiceCenterController::class, 'List'])->name('Home.serviceCenter');
Route::get('/service/list', [HomeServiceController::class, 'List'])->name('Home.service');
Route::get('/brand/list', [HomeBrandController::class, 'List'])->name('Home.brand');
Route::get('/booking-us', [HomeBookingController::class, 'Book'])->name('Home.book');
Route::get('/about-us', [HomeAboutController::class, 'About'])->name('Home.about');




//Frontend panel route end here


// Admin panel route start here

Route::get('/login', [UserController::class, 'Login'])->name('login');
Route::post('/do-login', [UserController::class, 'Dologin'])->name('dologin');

Route::group(['middleware'=>'auth', 'prefix'=>'admin'], function(){

    Route::get('/logout',[UserController::class, 'Logout'])->name('logout');

    Route::get('/', [AdminController::class, 'Dashboard'])->name('dashboard');
    Route::get('/user', [UserController::class, 'List'])->name('user');
    Route::get('/user/create-user', [UserController::class, 'Create'])->name('user.create');
    Route::post('/user/form', [UserController::class, 'Form'])->name('user.form');
    Route::get('/user/delete/{user_id}', [UserController::class, 'Delete'])->name('user.delete');
    
    
    Route::get('/service', [ServiceController::class, 'List'])->name('service');
    Route::get('/service/create', [ServiceController::class, 'Create'])->name('service.create');
    Route::post('/service/form', [ServiceController::class, 'Form'])->name('service.form');
    Route::get('/service/delete/{service_id}', [ServiceController::class,'Delete'])->name('service.delete');
    Route::get('/service/edit/{service_id}', [ServiceController::class, 'Edit'])->name('service.edit');
    Route::put('/service/update/{service_id}', [ServiceController::class, 'Update'])->name('service.update');
    
    
    Route::get('/category', [CategoryController::class, 'List'])->name('category');
    Route::get('/category/create-category', [CategoryController::class, 'CreateCategory'])->name('category.create');
    Route::post('/category/create-category/category-form', [CategoryController::class, 'Form'])->name('category.form');
    Route::get('/category/delete/{category_id}', [CategoryController::class, 'Delete'])->name('category.delete');
    Route::get('/category/view/{category_id}', [CategoryController::class, 'View'])->name('category.view');
    Route::get('/category/edit/{category_id}', [CategoryController::class, 'Edit'])->name('category.edit');
    Route::put('/category/update/{category_id}', [CategoryController::class, 'Update'])->name('category.update');
    
    
    Route::get('/brand', [BrandController::class, 'List'])->name('brand');
    Route::get('/brand/create', [BrandController::class, 'Create'])->name('brand.create');
    Route::post('/brand/form', [BrandController::class, 'Form'])->name('brand.form');
    Route::get('/brand/delete/{brand_id}', [BrandController::class, 'Delete'])->name('brand.delete');
    Route::get('/brand/view/{brand_id}', [BrandController::class, 'View'])->name('brand.view');
    Route::get('/brand/edit/{brand_id}', [BrandController::class, 'Edit'])->name('brand.edit');
    Route::put('/brand/update/{brand_id}', [BrandController::class, 'Update'])->name('brand.update');
    
    Route::get('/service-center', [ServiceCenterController::class, 'List'])->name('servicecenter');
    Route::get('service-center/delete/{service_center_id}', [ServiceCenterController::class, 'Delete'])->name('service.center.delete');
    Route::get('/service-center/make', [ServiceCenterController::class, 'Make'])->name('servicecenter.make');
    Route::post('/service-center/form', [ServiceCenterController::class, 'Form'])->name('servicecenter.form');
    Route::get('/service-center/total', [ServiceCenterController::class, 'Total'])->name('servicecenter.total');
    Route::get('/service-center/pending', [ServiceCenterController::class, 'Pending'])->name('servicecenter.pending');
    Route::get('/service-center/ratting', [ServiceCenterController::class, 'Ratting'])->name('servicecenter.ratting');
    
    
    Route::get('/appointment', [AppointmentController::class, 'Appoint'])->name('appointment');
    Route::get('/appointment/create', [AppointmentController::class, 'Create'])->name('appointment.create');
    Route::post('/appointment/form', [AppointmentController::class, 'Form'])->name('appointment.form');
    
    
    Route::get('/payment', [PaymentController::class, 'Gateway'])->name('payment');
    Route::get('/feedback', [FeedbackController::class, 'Message'])->name('feedback');
    Route::get('/report', [ReportController::class, 'List'])->name('report');

});


// Admin panel route end here

