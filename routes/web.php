<?php

use App\Http\Controllers\ArduinoController;
use App\Http\Controllers\ParameterController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Models\Product;
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

Route::get('/about', function () {
    return view('about');
});

Route::get('/store', function () {

    $products = Product::with('parameters')->get();

    return view('store')->with('products', $products);
});

Route::get('/landen/senegal', function () {
    return view('countries/senegal');
});

Route::get('/landen/haiti', function () {
    return view('countries/haiti');
});

Route::get('/landen/laos', function () {
    return view('countries/laos');
});

Route::middleware('auth')->group(function() {

    Route::get('/dashboard', fn() => view('home'))->name('dashboard');

});

Route::get('/landen/senegal', [ArduinoController::class, 'getMeasuredData']);

Route::middleware('admin')->group(function () {

    Route::get('/admin/dashboard', fn() => view('home'))->name('admin.dashboard');

    Route::get('/products', [ProductController::class, 'index'])->name('products.index');
    Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
    Route::post('/products/create', [ProductController::class, 'create']);
    Route::get('/products/edit/{product}', [ProductController::class, 'read'])->name('products.edit');
    Route::put('/products/{product}', [ProductController::class, 'update'])->name('products.update');
    Route::delete('/products/delete/{product}', [ProductController::class, 'delete'])->name('products.delete');

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

});
