<?php

use App\Http\Controllers\API\BrandController;
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

Route::get('/brand-list', [BrandController::class, 'listBrand']);
Route::post('/brand-creates', [BrandController::class, 'storeBrand']);
Route::get('/brand-view/{id}', [BrandController::class, 'viewBrand']);
Route::put('/brand-update/{id}', [BrandController::class, 'updateBrand']);
