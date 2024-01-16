<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DeviceController;
use App\Http\Controllers\DeviceTypeController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArduinoController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::controller(ArduinoController::class)->group(function () {
    Route::post('/waterkwaliteit', 'store');
});

Route::post('/products/create', [DeviceTypeController::class, 'create']);
Route::get('/products/create', [DeviceTypeController::class, 'create'])->name('products.create');
Route::get('/products', [DeviceTypeController::class, 'apiIndex'])->name('products.index');

Route::middleware('auth:sanctum')->get('/devices/fetch/{id}', [DeviceController::class, 'apiFetch']);
Route::middleware('auth:sanctum')->get('/tests/fetch/{id}', [TestController::class, 'apiFetch']);

Route::post('/create', [UserController::class, 'create']);

Route::post('/login', [loginController::class, 'ApiLogin']);

Route::middleware('auth:sanctum')->get('/user', [UserController::class, 'show']);
Route::middleware('auth:sanctum')->post('/checkAuth', [loginController::class, 'checkAuth']);
