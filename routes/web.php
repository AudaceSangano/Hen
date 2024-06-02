<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MainController;

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

Route::group([

    'middleware' => 'auth'

], function ($router) {
    Route::get('/logout', [AuthController::class, 'logout'])->name('auth.logout');


    Route::get('/viewPlot', [MainController::class, 'plotList'])->name('layout.plot.list');
    Route::get('/Plot/{id?}', [MainController::class, 'singlePlot'])->name('layout.plot.single');

    Route::get('/RegisterAgent', [MainController::class, 'registerAgent'])->name('layout.agent.form');
    Route::post('/RegisterAgentOp', [MainController::class, 'registerAgentOp'])->name('agent.register');
    Route::get('/agents', [MainController::class, 'agentList'])->name('agent.list');
    Route::get('/agentUpdate/{id?}', [MainController::class, 'agentUpdateForm'])->name('agent.update');
    Route::post('/agentUpdateOp', [MainController::class, 'agentUpdateOp'])->name('agent.updateOp');
    Route::get('/agentDelete/{id?}', [MainController::class, 'agentDelete'])->name('agent.delete');

    Route::get('/viewMail', function () {
        return view("layout.mail");
    })->name('layout.plot.feedback');

    Route::get('/requestValue', function () {
        return view("layout.sendReq");
    })->name('layout.plot.req');

    Route::get('/dashboard', [MainController::class, 'dashboard'])->name('dashboard.index');

    Route::get('/register-product', function () {
        return view("layout.registerPlot");
    })->name('layout.plot.form');
    Route::post('/product-register', [MainController::class, 'registerProduct'])->name('product.register');
    Route::get('/farmer-product-list', [MainController::class, 'farmerProductList'])->name('farmer.product.list');
    Route::get('/deleteProduct/{id?}', [MainController::class, 'deleteProduct'])->name('layout.product.delete');
    Route::get('/update-product/{id?}', [MainController::class, 'updateProduct'])->name('layout.plot.update');
    Route::post('/update-product-operation', [MainController::class, 'updatePlotOp'])->name('product.update');


    Route::get('/account-profile', [MainController::class, 'profile'])->name('layout.user.setting');
    Route::post('/account-profile-operation', [MainController::class, 'profileOp'])->name('profile.update.operation');
    Route::post('/account-profile-operation-password', [AuthController::class, 'changePassword'])->name('profile.update.operation.security');

    Route::get('/farmer-list', [MainController::class, 'farmerList'])->name('layout.farmer.list');
    Route::get('/customer-list', [MainController::class, 'customerList'])->name('layout.customer.list');
    Route::get('/product-list', [MainController::class, 'productList'])->name('layout.product.list');
    Route::get('/product-list/{category?}', [MainController::class, 'productListByCategory'])->name('layout.product.list.category');

});

Route::get('/getProvince',[ MainController::class,'getProvince'])->name('province');
Route::get('/getDistrict/{province_id}',[ MainController::class,'getDistrict'])->name('district');
Route::get('getSector/{district_id}',[ MainController::class,'getSector'])->name('sector');

Route::get('/', function () {
    return view("auth.login");
})->name('auth.login.form');

Route::get('/register', function () {
    return view("auth.register");
})->name('auth.register.form');

Route::post('/registerOp', [AuthController::class,'register'])->name('auth.register');
Route::post('/loginOp', [AuthController::class,'authenticate'])->name('auth.login');
