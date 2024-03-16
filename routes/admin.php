<?php

use App\Http\Controllers\Admin\ProductCategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;


Route::get('admin/product_category/index', [ProductCategoryController::class, 'index']);