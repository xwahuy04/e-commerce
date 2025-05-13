<?php

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

Route::get('admin/register', function () {
    return view('admin-panel.register');
})->name('admin.register');

Route::get('dashboard', function () {
    return view('admin-panel.dashboard');
})->name('dashboard');

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

// User Controller
Route::get('user/list', [UserController::class, 'index'])->name('user.list');

Route::get('products/list', [ProductController::class, 'index'])->name('products.list');
Route::get('products/create', [ProductController::class, 'create'])->name('products.create');



