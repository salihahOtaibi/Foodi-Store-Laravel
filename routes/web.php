<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard;
use App\Http\Controllers\Shopping;


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//Dashboard Routes 
Route::get('/dashboard', [Dashboard::class, 'index'])->name('index')->middleware('auth');
Route::get('/products', [Dashboard::class, 'products'])->name('products')->middleware('auth');
Route::get('/createProduct', [Dashboard::class, 'createProduct'])->name('createProduct')->middleware('auth');
Route::get('/showProductData', [Dashboard::class, 'showProductData'])->name('showProductData')->middleware('auth');
Route::get('/delete', [Dashboard::class, 'delete'])->name('delete')->middleware('auth');
Route::get('/edit/{id}', [Dashboard::class, 'edit'])->name('edit')->middleware('auth');
Route::get('/update', [Dashboard::class, 'update'])->name('update')->middleware('auth');
Route::get('/dashboardTotals', [DashboardController::class, 'totals'])->name('dashboard');

Route::get('/showProductDetails', [Dashboard::class, 'showProductDetails'])->name('showDet')->middleware('auth');
Route::post('/createNewDetails', [Dashboard::class, 'createNewDetails'])->name('createNewDet')->middleware('auth');

Route::get('/orders', [Dashboard::class, 'orders'])->name('orders')->middleware('auth');

//Shopping Routes
Route::get('/', [Shopping::class, 'index'])->name('index2');
Route::get('/meals', [Shopping::class, 'meals'])->name('meals');
Route::get('/mealsDetails/{id}', [Shopping::class, 'mealsDetails'])->name('mealsDetails');
Route::get('/addToCart', [Shopping::class, 'addToCart'])->name('addToCart');

Route::get('/cart', [Shopping::class, 'cart'])->name('cart');












