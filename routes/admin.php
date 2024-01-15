<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::middleware(['admin', 'auth'])->prefix('admin')->group(function () {
    Route::resource('/categories', CategoryController::class)->names('admin.categories');
    Route::resource('/products', ProductController::class)->names('admin.products');
    Route::resource('/users', UserController::class)->names('admin.users');
    Route::get('/products/purchase/{product}', [ProductController::class, 'purchase'])
        ->name('admin.products.purchase');
});
