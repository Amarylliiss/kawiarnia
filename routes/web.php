<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BaseController;

use App\Http\Controllers\UserAddController;
use App\Http\Controllers\UserEditController;
use App\Http\Controllers\UserDeleteController;

use App\Http\Controllers\ProductAddController;
use App\Http\Controllers\ProductDeleteController;
use App\Http\Controllers\ProductEditController;

use App\Http\Controllers\OrderEditController;
use App\Http\Controllers\OrderDeleteController;

use App\Http\Controllers\ProductController;

use App\Http\Controllers\Controller;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/signup', function () {
    return view('signup');
});
Route::get('/order', function () {
    return view('order');
});
Route::get('/cart', function () {
    return view('cart');
});
Route::get('/shop', function () {
    return view('shop');
});
Route::get('/signup', [RegistrationController::class, 'create']);
Route::post('signup', [RegistrationController::class, 'store']);

Route::get('/login', [SessionsController::class, 'create']);
Route::post('/login', [SessionsController::class, 'store']);
Route::get('/logout', [SessionsController::class, 'destroy']);

Route::get('/panel', [AdminController::class, 'admin']);
Route::get('/product-add', [AdminController::class, 'admin']);
Route::get('/product-edit', [AdminController::class, 'admin']);
Route::get('/product-delete', [AdminController::class, 'admin']);
Route::get('/user-edit', [AdminController::class, 'admin']);
Route::get('/user-delete', [AdminController::class, 'admin']);
Route::get('/order-edit', [AdminController::class, 'admin']);
Route::get('/order-delete', [AdminController::class, 'admin']);


Route::get('/welcome', [Controller::class, 'welcome']);

Route::get('/', [BaseController::class, 'products']);
Route::get('/cake', [BaseController::class, 'cake']);
Route::get('/drink', [BaseController::class, 'drink']);
Route::get('/coffee', [BaseController::class, 'coffee']);
Route::get('/tea', [BaseController::class, 'tea']);
Route::get('/search', [BaseController::class, 'search']);


Route::get('/user-add', [UserAddController::class, 'create']);
Route::post('user-add', [UserAddController::class, 'store']);

Route::get('user-edit', [UserEditController::class, 'index']);
Route::get('user-edit-form/{id}', [UserEditController::class, 'edit']);
Route::post('user-edit/{id}', [UserEditController::class, 'update']);

Route::get('user-delete', [UserDeleteController::class, 'index']);
Route::get('user-delete/{id}', [UserDeleteController::class, 'destroy']);

Route::get('/product-add', [ProductAddController::class, 'create']);
Route::post('product-add', [ProductAddController::class, 'store']);

Route::get('product-delete', [ProductDeleteController::class, 'index']);
Route::get('product-delete/{id}', [ProductDeleteController::class, 'destroy']);

Route::get('product-edit', [ProductEditController::class, 'index']);
Route::get('product-edit-form/{id}', [ProductEditController::class, 'edit']);
Route::post('product-edit/{id}', [ProductEditController::class, 'update']);

Route::get('order-edit', [OrderEditController::class, 'index']);
Route::get('order-edit-form/{id}', [OrderEditController::class, 'edit']);
Route::post('order-edit/{id}', [OrderEditController::class, 'update']);

Route::get('order-delete', [OrderDeleteController::class, 'index']);
Route::get('order-delete/{id}', [OrderDeleteController::class, 'destroy']);


Route::get('single', [ProductController::class, 'index']);  

Route::get('cart', [ProductController::class, 'cart'])->name('cart');
Route::post('order',[ProductController::class, 'checkout']);
Route::get('add-to-cart/{id}', [ProductController::class, 'addToCart'])->name('add.to.cart');
Route::patch('update-cart', [ProductController::class, 'update'])->name('update.cart');
Route::delete('remove-from-cart', [ProductController::class, 'remove'])->name('remove.from.cart');
