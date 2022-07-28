<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductGalleryController;
use App\Http\Controllers\TransactionController;


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



Route::get('/', [DashboardController::class,'index'])->name('dashboard');
Auth::routes(['register' => false]);

// Route::get('/products', [ProductController::class,'index'])->name('products.index');
// Route::get('/products/edit/{id}', [ProductController::class,'edit'])->name('products.edit');
// Route::delete('/products/destroy/{id}', [ProductController::class,'destroy'])->name('products.destroy');
// Route::post('/products/store', [ProductController::class,'store'])->name('products.store');
// Route::get('/products/create', [ProductController::class,'create'])->name('products.create');
// Route::put('/products/update/{id}', [ProductController::class,'update'])->name('products.update');


Route::get('/products/{id}/gallery', [ProductController::class, 'gallery'])->name('products.gallery');
Route::resource('/products', ProductController::class);
Route::resource('/products-galleries', ProductGalleryController::class);

Route::get('/transactions/{id}/set-status', [TransactionController::class, 'setStatus'])->name('transactions.status');
Route::resource('/transactions', TransactionController::class);




