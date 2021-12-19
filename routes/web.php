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
use App\Http\Controllers\Backend\StockController;
use App\Http\Controllers\Backend\LoginController;
use App\Http\Controllers\Backend\PlanttypeController;
use App\Http\Controllers\Backend\AdminloginController;
use App\Http\Controllers\Backend\DashboardController;
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
//     return view('website.master');
// });



Route::group(['prefix'=>'admin'],function (){

Route::get('/login',[AdminloginController::class,'login'])->name('admin.login');
Route::post('/login',[AdminloginController::class,'doLogin'])->name('admin.doLogin');

Route::group(['middleware'=>'auth'],function (){
    Route::get('/', function () {
        return view('admin.layouts.admin');
    })->name('dashboard');
    Route::get('/logout',[AdminloginController::class,'logout'])->name('admin.logout');




Route::get('/admin',[AdminController::class,'system'])->name('dashboard');

 Route::get('/admin/planting_tool',[PlantingController::class,'tool'])->name('admin.planting');

 
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
Route::get('plant/view/{id}',[PlantnameController::class,'plantnamedetails'])->name('admin.plantingtool.details');


// picture
Route::get('admin/picture',[PictureController::class,'picturelist'])->name('admin.picture');
Route::get('admin/picture/form',[PictureController::class,'pictureform'])->name('picture.form');
Route::post('admin/picture/store',[PictureController::class,'store'])->name('picture.store');

// Pesticide
Route::get('admin/pesticide',[PesticideController::class,'pesticide'])->name('admin.pesticide.list');
Route::get('admin/pesticide/form',[PesticideController::class,'pesticideform'])->name('pesticide.form');
Route::post('admin/pesticide/store',[PesticideController::class,'store'])->name('pesticide.store');

// plantName
Route::get('/admin/plantname/list',[PlantnameController::class,'plantlist'])->name('admin.plant.name');
Route::get('/admin/plantname/form',[PlantnameController::class,'Plantname'])->name('plantname');
Route::post('plants/store',[PlantnameController::class,'store'])->name('plant.store');
Route::get('plant/view/{plant_id}',[PlantnameController::class,'plantnamedetails'])->name('admin.plantname.details');
Route::get('plant/delete/{id}',[PlantnameController::class,'plantnamedelete'])->name('admin.plantname.delete');




// stock
Route::get('admin/stock/list',[StockController::class,'stock'])->name('admin.stock');
Route::get('admin/stock/form',[StockController::class,'stockform'])->name('stock.form');
Route::post('/stock/store',[StockController::class,'store'])->name('stock.store');

// Registration

Route::get('/user/registration',[LoginController::class,'registrationform'])->name('user.registration');
Route::post('/user/do/registration',[LoginController::class,'doregistration'])->name('user.do.registration');
Route::get('/user/login',[LoginController::class,'loginform'])->name('user.login');
Route::post('/user/do/login',[LoginController::class,'dologin'])->name('user.do.login');
Route::get('/user/logout',[LoginController::class,'logout'])->name('user.logout');

// Plant Type
Route::get('/admin/planttype/list',[PlanttypeController::class,'plantT'])->name('admin.plant.type');
Route::get('/admin/planttype/form',[PlanttypeController::class,'plantTform'])->name('planttype.form');
Route::post('/planttype/store',[PlanttypeController::class,'store'])->name('planttype.store');

});
});



//route for dashboard
Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard.index');
