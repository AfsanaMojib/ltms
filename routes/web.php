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
use App\Http\controllers\Backend\ItemController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Backend\FeedbackController;
use App\Http\Controllers\Frontend\ShowUserController;
use App\Http\Controllers\Frontend\UserRegistrationController;
use Illuminate\Support\Facades\Auth;

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



// Route::get('/login',[AdminloginController::class,'login'])->name('admin.login');
// Route::post('/login/admin',[AdminloginController::class,'doLogin'])->name('admin.doLogin');

Route::group(['prefix' => 'admin'], function () {

    Route::group(['middleware' => 'auth'], function () {
        Route::get('/', function () {
            return view('admin.layouts.admin');
        })->name('dashboard');

        Route::get('/logout', [AdminloginController::class, 'logout'])->name('admin.logout');




        Route::get('/admin', [AdminController::class, 'system'])->name('dashboard');

        Route::get('/admin/planting_tool', [PlantingController::class, 'tool'])->name('admin.planting');


        Route::get('/admin/admin', [AdminController::class, 'adminpart'])->name('admin.adminpart');


        // item
        Route::get('/admin/item/list', [itemController::class, 'itemlist'])->name('admin.item');
        Route::get('/admin/item/form', [itemController::class, 'itemform'])->name('item.form');
        Route::post('/admin/store', [itemController::class, 'store'])->name('item.store');
        Route::get('item/view/{id}', [itemController::class, 'itemdetails'])->name('admin.item.details');
        Route::get('item/edit/{id}', [itemController::class, 'itemEdit'])->name('admin.item.edit');
        Route::put('item/update/{id}', [itemController::class, 'itemUpdate'])->name('admin.item.update');
        Route::get('item/delete/{id}', [ItemController::class, 'itemdelete'])->name('admin.item.delete');


        // Payment
        Route::get('/admin/payments', [PaymentController::class, 'payment'])->name('admin.payment.create');
        Route::get('/admin/payments/form', [PaymentController::class, 'paymentform'])->name('admin.payment.form');
        Route::post('/payments/store', [PaymentController::class, 'store'])->name('payment.store');


        // soil_texture
        Route::get('/admin/soil_texture', [SoiltextureController::class, 'soil'])->name('admin.soil_texture');
        Route::get('/admin/soil_form', [SoiltextureController::class, 'soilform'])->name('soiltexture.form');
        Route::post('/soiltexture/add', [SoiltextureController::class, 'add'])->name('soiltexture.add');
        Route::get('soiltexture/view/{id}', [SoiltextureController::class, 'soiltexturedetails'])->name('admin.soiltexture.details');
        Route::get('soiltexture/edit/{id}', [SoiltextureController::class, 'soiltextureEdit'])->name('admin.soiltexture.edit');
        Route::put('soiltexture/update/{id}', [SoiltextureController::class, 'soiltextureUpdate'])->name('admin.soiltexture.update');
        Route::get('soiltexture/delete/{id}', [SoiltextureController::class, 'soiltexturedelete'])->name('admin.soiltexture.delete');


        // planting tool
        Route::get('/admin/plantingtool/list', [PlantingtoolController::class, 'plantinglist'])->name('admin.plantingtool');
        Route::get('/admin/planting/form', [PlantingtoolController::class, 'plantingform'])->name('planting.form');
        Route::post('/admin/plantingtool/store', [PlantingtoolController::class, 'store'])->name('plantingtool.store');
        Route::get('plant-tool/view/{id}', [PlantingtoolController::class, 'plantingtooldetails'])->name('admin.plantingtool.details');
        Route::get('plant_tool/edit/{id}', [PlantingtoolController::class, 'plantingtoolEdit'])->name('admin.plantingtool.edit');
        Route::put('plant_tool/update/{id}', [PlantingtoolController::class, 'plantingtoolUpdate'])->name('admin.plantingtool.update');
        Route::get('plant_tool/delete/{id}', [PlantingtoolController::class, 'plantingtooldelete'])->name('admin.plantingtool.delete');


        // picture
        Route::get('admin/picture', [PictureController::class, 'picturelist'])->name('admin.picture');
        Route::get('admin/picture/form', [PictureController::class, 'pictureform'])->name('picture.form');
        Route::post('admin/picture/store', [PictureController::class, 'store'])->name('picture.store');
        Route::get('picture/view/{id}', [PictureController::class, 'picturedetails'])->name('admin.picture.details');
        Route::get('picture/delete/{id}', [PictureController::class, 'picturedelete'])->name('admin.picture.delete');



        // Pesticide
        Route::get('admin/pesticide', [PesticideController::class, 'pesticide'])->name('admin.pesticide.list');
        Route::get('admin/pesticide/form', [PesticideController::class, 'pesticideform'])->name('pesticide.form');
        Route::post('admin/pesticide/store', [PesticideController::class, 'store'])->name('pesticide.store');
        Route::get('pesticide/view/{id}', [PesticideController::class, 'pesticidedetails'])->name('admin.pesticide.details');
        Route::get('pesticide/delete/{id}', [PesticideController::class, 'pesticidedelete'])->name('admin.pesticide.delete');
        // plantName
        Route::get('/admin/plantname/list', [PlantnameController::class, 'plantlist'])->name('admin.plant.name');
        Route::get('/admin/plantname/form', [PlantnameController::class, 'Plantname'])->name('plantname');
        Route::post('plants/store', [PlantnameController::class, 'store'])->name('plant.store');
        Route::get('plant/view/{plant_id}', [PlantnameController::class, 'plantnamedetails'])->name('admin.plantname.details');
        Route::get('plant/delete/{id}', [PlantnameController::class, 'plantnamedelete'])->name('admin.plantname.delete');




        // stock
        Route::get('/stock/list', [StockController::class, 'stock'])->name('admin.stock');
        Route::get('admin/stock/form', [StockController::class, 'stockform'])->name('stock.form');
        Route::post('/stock/store', [StockController::class, 'store'])->name('stock.store');
        Route::get('/stocks/view/{id}', [StockController::class, 'stockdetails'])->name('admin.stock.details');


        // // Registration

        // Route::get('/user/registration',[LoginController::class,'registrationform'])->name('user.registration');
        // Route::post('/user/do/registration',[LoginController::class,'doregistration'])->name('user.do.registration');
        // Route::get('/user/login',[LoginController::class,'loginform'])->name('user.login');
        // Route::post('/user/do/login',[LoginController::class,'dologin'])->name('user.do.login');
        // Route::get('/user/logout',[LoginController::class,'logout'])->name('user.logout');

        // Feedback
        Route::get('/user/feedback/list', [FeedbackController::class, 'feedbacklist'])->name('user.feedback');
        Route::post('/feedback/store', [FeedbackController::class, 'store'])->name('feedback.store');

        // Plant Type
        Route::get('/admin/planttype/list', [PlanttypeController::class, 'plantT'])->name('admin.plant.type');
        Route::get('/admin/planttype/form', [PlanttypeController::class, 'plantTform'])->name('planttype.form');
        Route::post('/planttype/store', [PlanttypeController::class, 'store'])->name('planttype.store');
        Route::get('planttype/view/{id}', [PlanttypeController::class, 'planttypedetails'])->name('admin.planttype.details');
        Route::get('planttype/delete/{id}', [PlanttypeController::class, 'planttypedelete'])->name('admin.planttype.delete');
    });
});



//route for dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');


// website part
Route::get('/', [HomeController::class, 'home'])->name('website.home');

// user feedback
Route::get('/website/user/feedback', [ShowUserController::class, 'showuser'])->name('website.user.feedback');
Route::post('/website/do/user/feedback', [ShowUserController::class, 'douserfeedback'])->name('website.user.do.feedback');

// user registration

Route::get('/user/website/registration', [UserRegistrationController::class, 'userR'])->name('website.user.registration');

//  user
Route::get('/admin/user/list', [UserController::class, 'user'])->name('admin.user');
Route::post('/admin/store', [UserController::class, 'store'])->name('user.store');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
