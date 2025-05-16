<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('admin/login', function () {
    return view('admin-panel.login');
})->name('admin.login');

Route::get('shop', function () {
    return view('shop');
})->name('shop');

Route::get('cart', function () {
    return view('cart');
})->name('cart');

Route::get('checkout', function () {
    return view('checkout');
})->name('checkout');

Route::get('testimonial', function () {
    return view('testimonial');
})->name('testimonial');

Route::get('product-details', function () {
    return view('product-details');
})->name('product.details');

Route::get('contact', function () {
    return view('contact');
})->name('contact');

Route::middleware('auth')->group(function () {

    Route::get('user/list', [UserController::class, 'index'])->name('user.list');

    Route::get('dashboard', function () {
        return view('admin-panel.dashboard');
    })->name('dashboard');


    Route::prefix('products')->group(function () {
       
        Route::get('list', [ProductController::class, 'index'])->name('products.list');
        Route::get('create', [ProductController::class, 'create'])->name('products.create');
        Route::post('store', [ProductController::class, 'store'])->name('products.store');
    });
});

// User Controller

// admin
Route::post('admin/login', [LoginController::class, 'login'])->name('admin.login');
Route::get('logout', [LoginController::class, 'logout'])->name('logout');
Route::get('admin/register', [RegisterController::class, 'create'])->name('admin.register');
Route::post('admin/store', [RegisterController::class, 'register'])->name('admin.store');
