<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductAddController;
use App\Http\Controllers\BaseController;
use App\Http\Controllers\UserDeleteController;
use App\Http\Controllers\ProductDeleteController;
use App\Http\Controllers\ProductEditController;
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
Route::get('/logout', function () {
    return view('logout');
});

Route::get('/signup', [RegistrationController::class, 'create']);
Route::post('signup', [RegistrationController::class, 'store']);

Route::get('/login', [SessionsController::class, 'create']);
Route::post('/login', [SessionsController::class, 'store']);
Route::get('/logout', [SessionsController::class, 'destroy']);

Route::get('/panel', [AdminController::class, 'admin']);

Route::get('/welcome', [Controller::class, 'welcome']);

Route::get('/product-add', [ProductAddController::class, 'create']);
Route::post('product-add', [ProductAddController::class, 'store']);

Route::get('/', [BaseController::class, 'products']);
Route::get('/cake', [BaseController::class, 'cake']);
Route::get('/drink', [BaseController::class, 'drink']);
Route::get('/coffee', [BaseController::class, 'coffee']);
Route::get('/tea', [BaseController::class, 'tea']);

Route::get('user-delete', [UserDeleteController::class, 'index']);
Route::get('delete/{id}', [UserDeleteController::class, 'destroy']);

Route::get('product-delete', [ProductDeleteController::class, 'index']);
Route::get('delete/{id}', [ProductDeleteController::class, 'destroy']);

Route::get('product-edit', [ProductEditController::class, 'index']);
Route::get('product-edit-form/{id}', [ProductEditController::class, 'edit']);
Route::post('product-edit/{id}', [ProductEditController::class, 'update']);