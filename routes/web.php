<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\CartController;


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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [AppController::class, 'index'])->name('app.index');
Route::get('/shop', [ShopController::class, 'index'])->name('shop.index');
Route::get('/product/{slug}', [ShopController::class, 'productDetails'])->name('shop.product.details');
Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::post('/cart/store', [CartController::class, 'addToCart'])->name('cart.store');
Route::put('/cart/update', [CartController::class, 'updateCart'])->name('cart.update');
Route::delete('/cart/remove', [CartController::class, 'removeItem'])->name('cart.remove');
Route::delete('/cart/clear', [CartController::class, 'clearCart'])->name('cart.clear');



Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// User Routes
Route::middleware(['auth', 'auth_user'])->group(function(){
    Route::get('/my-account', [UserController::class, 'index'])->name('user.index');
});

// Admin Routes
Route::middleware(['auth', 'auth_admin'])->group(function(){
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
    Route::get('/admin/customers', [AdminController::class, 'allCustomers'])->name('admin.customers');
    Route::get('/admin/orders', [AdminController::class, 'allOrders'])->name('admin.orders');
});