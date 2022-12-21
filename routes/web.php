<?php

use App\Http\Middleware\Customer;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\CategoryController;
use Illuminate\Routing\Controllers\Middleware;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\WebUserController;
use App\Http\Controllers\SslCommerzPaymentController;
use App\Http\Controllers\Frontend\HomeAboutController;
use App\Http\Controllers\Frontend\HomeBrandController;
use App\Http\Controllers\Frontend\HomeServiceController;
use App\Http\Controllers\Frontend\HomeCategoryController;
use App\Http\Controllers\Frontend\HomeServiceCenterController;
use App\Http\Controllers\Frontend\ServiceCenter\SCProfileController;
use App\Http\Controllers\Frontend\ServiceCenter\SCRequestController;
use App\Http\Controllers\Frontend\ServiceCenter\SCServiceController;
use App\Http\Controllers\Frontend\Customer\CustomerBookingController;
use App\Http\Controllers\Frontend\Customer\CustomerPaymentController;
use App\Http\Controllers\Frontend\Customer\CustomerProfileController;
use App\Http\Controllers\Frontend\Customer\DuePaymentController;
use App\Http\Controllers\Frontend\ServiceCenter\SCCategoryController;
use App\Http\Controllers\Frontend\ServiceCenter\SCCompletedController;
use App\Http\Controllers\Frontend\ServiceCenter\SCReportController;

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
Route::post('/user/customer/signup', [WebUserController::class, 'SignUp'])->name('user.signup');
Route::post('/user/service-center/signup', [WebUserController::class, 'Service_signup'])->name('service.signup');
Route::post('/user/login', [WebUserController::class, 'Login'])->name('user.login');

Route::group(['middleware'=>'auth', 'customer'],function(){
    Route::get('/user/logout', [WebUserController::class, 'Logout'])->name('user.logout');

    Route::get('/user/profile', [CustomerProfileController::class, 'Profile'])->name('customer.profile');
    Route::put('/user/update', [CustomerProfileController::class, 'Update'])->name('customer.profileUpdate');

    Route::get('/booking-info', [CustomerBookingController::class, 'BookingInfo'])->name('customer.booking');
    Route::get('/booking/form', [CustomerBookingController::class, 'Form'])->name('customer.bookingForm');
    Route::get('/due/payment/{due_id}', [CustomerBookingController::class, 'DuePayment'])->name('duePayment');

// ssl commerze due payment clearance
    Route::post('/pay/{id}', [DuePaymentController::class, 'index'])->name('payNow.due');
    Route::post('/success', [DuePaymentController::class, 'success']);
    Route::post('/fail', [DuePaymentController::class, 'fail']);
    Route::post('/cancel', [DuePaymentController::class, 'cancel']);
// ssl commerze due payment clearance

    Route::get('/service-center/view/book-now/{booking_id}', [HomeServiceCenterController::class, 'BookingView'])->name('Home.serviceCenter.servicewise.bookingView');
    Route::post('/service-center/view/book-now/store', [HomeServiceCenterController::class, 'Store'])->name('webservice.booking');

    Route::get('/booking/edit/{booking_id}', [CustomerBookingController::class, 'Edit'])->name('customer.bookingEdit');
    Route::put('/booking/update/{booking_id}', [CustomerBookingController::class, 'Update'])->name('customer.bookingUpdate');
    Route::get('/booking/delete/{booking_id}', [CustomerBookingController::class, 'Delete'])->name('customer.bookingDelete');
    Route::get('/booking/details/{booking_id}', [CustomerBookingController::class, 'Details'])->name('customer.bookingDetails');


    Route::get('/payment', [CustomerPaymentController::class, 'PaymentInfo'])->name('customer.paymentinfo');



    // SSLCOMMERZ Start


    Route::post('/pay', [SslCommerzPaymentController::class, 'index'])->name('payNow');
    Route::post('/success', [SslCommerzPaymentController::class, 'success']);
    Route::post('/fail', [SslCommerzPaymentController::class, 'fail']);
    Route::post('/cancel', [SslCommerzPaymentController::class, 'cancel']);


});

Route::group(['middleware'=>'auth', 'servicecenter', 'prefix'=>'service-manager'],function(){
    Route::get('/user/logout', [WebUserController::class, 'Logout'])->name('user.logout');

    Route::get('/profile', [SCProfileController::class, 'Profile'])->name('scprofile');
    Route::post('/profile/edit', [SCProfileController::class, 'Edit'])->name('scprofile.edit');

    Route::get('/service', [SCServiceController::class, 'List'])->name('scservice.list');
    Route::get('/service/service-form', [SCServiceController::class, 'Form'])->name('scservice.form');
    Route::post('/service/store', [SCServiceController::class, 'Store'])->name('scservice.store');
    Route::get('/service/edit/{service_id}', [SCServiceController::class, 'UpdateForm'])->name('scservice.updateform');
    Route::put('/service/update/{service_id}', [SCServiceController::class, 'UpdateStore'])->name('scservice.update');
    Route::get('/service/delete/{service_id}', [SCServiceController::class, 'Delete'])->name('scservice.delete');


    Route::get('/category',[SCCategoryController::class, 'List'])->name('sccategory.list');


    Route::get('/request', [SCRequestController::class, 'List'])->name('screquest.list');
    Route::get('/request/edit/{request_id}', [SCRequestController::class, 'Edit'])->name('screquest.editForm');
    Route::put('/request/update/{request_id}', [SCRequestController::class, 'Update'])->name('screquest.update');
    Route::get('/request/delete/{request_id}', [SCRequestController::class, 'Delete'])->name('screquest.delete');


    Route::get('/complete', [SCCompletedController::class, 'List'])->name('sccompleted.list');


    Route::get('/report', [SCReportController::class, 'ReportGenerate'])->name('screport.info');
    Route::post('/report/generate', [SCReportController::class, 'ReportGenerate'])->name('screport.generate');


});





Route::get('/', [HomeController::class, 'Home'])->name('Home');
Route::get('/service-center', [HomeServiceCenterController::class, 'List'])->name('Home.serviceCenter');
Route::get('/service-center/view/{service_center_id}', [HomeServiceCenterController::class, 'View'])->name('Home.servicecenter.view');



Route::get('/service/list', [HomeServiceController::class, 'List'])->name('Home.service');
Route::get('/service/details/{service_id}', [HomeServiceController::class, 'Details'])->name('Home.serviceDetails');


Route::get('/brand/list', [HomeBrandController::class, 'List'])->name('Home.brand');
Route::get('/brand/details/{brand_id}', [HomeBrandController::class, 'Details'])->name('Home.brandDetails');

Route::get('/about-us', [HomeAboutController::class, 'About'])->name('Home.about');

Route::get('/category', [HomeCategoryController::class, 'Category'])->name('Home.category');
Route::get('/category/details/{category_id}', [HomeCategoryController::class, 'Details'])->name('Home.categoryDetails');

Route::get('/contact', [ContactController::class, 'Contact'])->name('Contact');
Route::post('/contact/store', [ContactController::class, 'Store'])->name('contact.store');




//Frontend panel route end here


// Admin panel route start here

Route::get('/login', [UserController::class, 'Login'])->name('login');
Route::post('/do-login', [UserController::class, 'Dologin'])->name('dologin');

Route::group(['middleware'=>'auth', 'prefix'=>'admin'], function(){
    Route::group(['middleware'=>'adminchecker'], function(){

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


        Route::get('/payment', [PaymentController::class, 'Gateway'])->name('payment');

        Route::get('/contact', [ContactController::class, 'Message'])->name('contact');
        Route::get('/contact/delete/{contact_id}', [ContactController::class, 'Delete'])->name('contact.delete');

        Route::get('/report', [ReportController::class, 'List'])->name('report');
    });

});


// Admin panel route end here

