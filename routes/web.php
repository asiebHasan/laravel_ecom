<?php

use Illuminate\Support\Facades\Route;
// use Illuminate\Routing\RouteGroup;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;

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

Route::group(['prefix' => ''], function () {
    Route::get('/', [HomeController::class, 'index'])->name('home.index');
    Route::get('/about', [HomeController::class, 'about'])->name('home.about');
    Route::get('/contact', [HomeController::class, 'contact'])->name('home.contact');
    Route::get('/services', [HomeController::class, 'services'])->name('home.services');
    

    Route::prefix('products')->group(function () {
        Route::get('/', [ProductController::class, 'product_list'])->name('products.list');
        Route::get('/{id}', [ProductController::class, 'product_detail'])->name('products.detail');
    });
});