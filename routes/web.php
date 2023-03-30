<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ProductshopController;
use App\Http\Controllers\cartController;
use App\Http\Controllers\checkoutController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\addProduct;
use App\Http\Controllers\AdminDashbord;
use App\Http\Controllers\searchAdmin;
use App\Models\User;

Route::get('/home', [ProductsController::class, 'Products']) -> name('home') -> middleware('AuthLogin');
Route::get('/shop', [ProductshopController::class, 'ProductShop']) -> name('shop') -> middleware('AuthLogin');
Route::get('/shop', [ProductshopController::class, 'search']) -> name('shop') -> middleware('AuthLogin');
Route::get('/cart', [cartController::class, 'cart']) -> name('cart') -> middleware('AuthLogin');
Route::get('add-to-cart/{id}', [cartController::class, 'AddToCart']) -> name('AddToCart') -> middleware('AuthLogin');
Route::delete('remove-from-cart', [cartController::class, 'Remove']) -> name('RemoveFromCart') -> middleware('AuthLogin');
Route::put('update-cart', [cartController::class, 'update']) -> name('updateCart') -> middleware('AuthLogin');
Route::get('/checkout', [checkoutController::class, 'checkout']) -> name('checkout') -> middleware('AuthLogin');
Route::get('/', [UserController::class, 'index']) -> name('login') ;
Route::get('/sign-up',[UserController::class, 'sign_up']) -> name('sign-up');
Route::post('/register', [UserController::class, 'registration']) -> name('register');
Route::post('/login-user', [UserController::class, 'loginUser']) -> name('login-user');
Route::get('/admin-dashbord', [UserController::class, 'ProfilePage']) -> name('admin-dashbord') -> middleware('AuthLogin');
Route::get('/logout', [UserController::class, 'logout']) -> name('logout') -> middleware('AuthLogin');
Route::resource('/admin', addProduct::class) -> middleware('AuthLogin');
Route::get('/admin-dashbord', [addProduct::class, 'index']) -> name('admin-dashbord') -> middleware('AuthLogin');
Route::post('/chekout-data', [checkoutController::class, 'checkout_data']) -> name('checkout_data');
