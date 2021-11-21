<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers\AdminController;
use App\Http\controllers\PlantingController;
use App\Http\controllers\Backend\PlantnameController;
use App\Http\controllers\Backend\SoiltextureController;
use App\Http\controllers\Backend\UserController;
use App\Http\controllers\Backend\PaymentController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/admin',[AdminController::class,'system'])->name('dashboard');

 Route::get('/admin/planting_tool',[PlantingController::class,'tool'])->name('admin.planting');

 Route::get('/products/list',[ProductController::class,'index'])->name('product.index');
 Route::get('/products/create',[ProductController::class,'create'])->name('product.create');
 Route::post('/products/store',[ProductController::class,'store'])->name('product.store');
 Route::post('/plantingtool/store',[PlantingController::class,'store'])->name('plantingtool.store');
 Route::get('/admin/admin',[AdminController::class,'adminpart'])->name('admin.adminpart');
 Route::get('/admin/plantname',[PlantnameController::class,'plant'])->name('admin.Plantname');
 Route::get('/admin/soil_texture',[ SoiltextureController::class,'soil'])->name('admin.soil_texture');
 Route::get('/admin/picture',[PictureController::class,'picture'])->name('admin.picture');
 Route::get('/admin/user',[UserController::class,'user'])->name('admin.user');



Route::get('/admin/payments',[PaymentController::class,'payment'])->name('admin.payment.create');
Route::get('/admin/payments/form',[PaymentController::class,'paymentform'])->name('admin.payment.form');
Route::post('/payments/store',[PaymentController::class,'store'])->name('payment.store');