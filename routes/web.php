<?php

use App\Http\Controllers\ArduinoController;
use App\Http\Controllers\DeviceController;
use App\Http\Controllers\ParameterController;
use App\Http\Controllers\DeviceTypeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WatersourceController;
use App\Models\DeviceType;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Auth::routes();

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/device/info/{id}', [DeviceTypeController::class, 'readStore'])->name('product.page');
Route::get('/device/checkout/{id}', [DeviceTypeController::class, 'checkOut'])->name('product.checkout');

Route::get('/about', function () {
    return view('about');
});

Route::get('/checkout', function () {
    return view('checkout');
});

Route::get('/store', function () {

    $products = DeviceType::with('parameters')->get();

    return view('store')->with('products', $products);
});

Route::get('/countries/senegal', function () {
    return view('countries/senegal');
});

Route::get('/countries/haiti', function () {
    return view('countries/haiti');
});

Route::get('/countries/laos', function () {
    return view('countries/laos');
});

Route::get('/countries/netherlands', function () {
    return view('countries/netherlands');
});


Route::middleware('auth')->group(function() {

    Route::get('/dashboard', fn() => view('home'))->name('dashboard');

});

Route::get('/landen/{country}', [WatersourceController::class, 'getTestData']);

Route::middleware('admin')->group(function () {

    Route::get('/admin/dashboard', fn() => view('home'))->name('admin.dashboard');

    Route::get('/products', [DeviceTypeController::class, 'index'])->name('products.index');
    Route::get('/device_type/create', [DeviceTypeController::class, 'create'])->name('devicetype.create');
    Route::post('/device_type/create', [DeviceTypeController::class, 'create'])->name('devicetype.create');
    Route::get('/products/edit/{product}', [DeviceTypeController::class, 'read'])->name('products.edit');
    Route::put('/products/{product}', [DeviceTypeController::class, 'update'])->name('products.update');
    Route::delete('/products/delete/{product}', [DeviceTypeController::class, 'delete'])->name('products.delete');

    Route::get('/parameters', [ParameterController::class, 'index'])->name('parameters.index');
    Route::get('/parameters/create', [ParameterController::class, 'create'])->name('parameters.create');
    Route::post('/parameters/create', [ParameterController::class, 'create'])->name('parameters.create');
    Route::get('/parameters/edit/{parameter}', [ParameterController::class, 'read'])->name('parameters.edit');
    Route::put('/parameters/{parameter}', [ParameterController::class, 'update'])->name('parameters.update');
    Route::delete('/parameters/delete/{parameter}', [ParameterController::class, 'delete'])->name('parameters.delete');

    Route::get('/users', [UserController::class, 'index'])->name('users.index');
    Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
    Route::post('/users/create', [UserController::class, 'create'])->name('users.create');
    Route::get('/users/edit/{user}', [UserController::class, 'read'])->name('users.edit');
    Route::put('/users/{user}', [UserController::class, 'update'])->name('users.update');
    Route::delete('/users/delete/{user}', [UserController::class, 'delete'])->name('users.delete');

    Route::get('/devices', [DeviceController::class, 'index'])->name('devices.index');
    Route::get('/devices/create', [DeviceController::class, 'create'])->name('devices.create');
    Route::post('/devices/create', [DeviceController::class, 'create'])->name('devices.create');
    Route::get('/devices/edit/{device}', [DeviceController::class, 'read'])->name('devices.edit');
    Route::put('/devices/{device}', [DeviceController::class, 'update'])->name('devices.update');
    Route::delete('/devices/delete/{device}', [DeviceController::class, 'delete'])->name('devices.delete');
});
