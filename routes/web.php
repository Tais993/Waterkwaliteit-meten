<?php

use App\Http\Controllers\ArduinoController;
use App\Http\Controllers\ParameterController;
use App\Http\Controllers\ProductController;
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

Route::get('/dashboard', function () {
    // Check if the user is authenticated and has an admin role
    if (auth()->check() && auth()->user()->role_id === 1) {
        return view('home');
    }

    // Redirect or return a response indicating unauthorized access
    return redirect('/')->with('error', 'Unauthorized access');
})->name('dashboard')->middleware('auth');

Route::get('/landen/senegal', [ArduinoController::class, 'getMeasuredData']);

Route::get('/products', [ProductController::class, 'index'])->name('products.index');

Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
Route::post('/products/create', [ProductController::class, 'create']);

Route::get('/parameters', [ParameterController::class, 'index'])->name('parameters.index');

Route::get('/parameters/create', [ParameterController::class, 'create'])->name('parameters.create');
Route::post('/parameters/create', [ParameterController::class, 'create'])->name('parameters.create');

