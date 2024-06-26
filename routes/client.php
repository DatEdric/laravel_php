<?php

use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Client\CartController;
use App\Http\Controllers\Client\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('home', [HomeController::class, 'index'])->name('client.index');
Route::get('cart/add-product/{product}/{qty?}', [CartController::class, 'add'])->name('cart.add.product')->middleware('auth');
Route::get('cart/remove-product/{product}', [CartController::class, 'remove'])->name('cart.remove.product');

Route::get('cart', [CartController::class, 'index'])->name('cart.index');
Route::get('product/{slug}',[ProductController::class],'detail')->name('product.detail');
