<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers\AdminController;
use App\Http\controllers\Backend\SoiltextureController;
use App\Http\controllers\Backend\UserController;
use App\Http\controllers\Backend\PaymentController;
use App\Http\Controllers\Backend\PlantingtoolController;
use App\Http\Controllers\Backend\PictureController;
use App\Http\controllers\Backend\PesticideController;
use App\Http\Controllers\Backend\PlantnameController;
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
 
 Route::get('/admin/admin',[AdminController::class,'adminpart'])->name('admin.adminpart');


 


// Payment
Route::get('/admin/payments',[PaymentController::class,'payment'])->name('admin.payment.create');
Route::get('/admin/payments/form',[PaymentController::class,'paymentform'])->name('admin.payment.form');
Route::post('/payments/store',[PaymentController::class,'store'])->name('payment.store');


// soil_texture
Route::get('/admin/soil_texture',[ SoiltextureController::class,'soil'])->name('admin.soil_texture');
Route::get('/admin/soil_form',[SoiltextureController::class,'soilform'])->name('soiltexture.form');
Route::post('/soiltexture/add',[SoiltextureController::class,'add'])->name('soiltexture.add');

// planting tool
Route::get('/admin/plantingtool/list',[PlantingtoolController::class,'plantinglist'])->name('admin.plantingtool');
Route::get('/admin/planting/form',[PlantingtoolController::class,'plantingform'])->name('planting.form');
Route::post('/admin/plantingtool/store',[PlantingtoolController::class,'store'])->name('plantingtool.store');

// Plantname
Route::get('admin/plantname/list',[PlantnameController::class,'plantname'])->name('admin.Plantname');
Route::get('admin/plantname/form',[PlantnameController::class,'plantnameform'])->name('plant.form');

// picture
Route::get('admin/picture',[PictureController::class,'picturelist'])->name('admin.picture');
Route::get('admin/picture/form',[PictureController::class,'pictureform'])->name('picture.form');

// Pesticide
Route::get('admin/pesticide',[PesticideController::class,'pesticide'])->name('admin.pesticide.list');
Route::get('admin/pesticide',[PesticideController::class,'pesticide_form'])->name('pesticide.form');

// plantName
Route::get('/admin/plantname/list',[PlantnameController::class,'plantlist'])->name('admin.plant.name');
Route::get('/admin/plantname/form',[PlantnameController::class,'Plantname'])->name('plantname');
Route::post('/plants/store',[PlantnameController::class,'store'])->name('plant.store');