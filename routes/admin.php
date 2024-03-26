<?php
use App\Http\Controllers\Admin\ProductCategoryController;
use Illuminate\Support\Facades\Route;

// Route::get('admin/product_category/index', [ProductCategoryController::class, 'index'])->name('admin.product_category.index');

// Route::get('admin/product_category/create', [ProductCategoryController::class, 'create'])->name('admin.product_category.create');
// Route::post('admin/product_category/store', [ProductCategoryController::class, 'store'])->name('admin.product_category.store');
// Route::post('admin/peoduct_category/delete/{id}', [ProductCategoryController::class, 'delete'])->name('admin/peoduct_category.destroy');
// Route::get('admin/peoduct_category/detail/{id}', [ProductCategoryController::class, 'detail'])->name('admin/peoduct_category.detail');
// Route::post('admin/peoduct_category/update/{id}', [ProductCategoryController::class, 'update'])->name('admin/peoduct_category.update');

// Route::post('admin/product_category/slug', [ProductCategoryController::class, 'slug'])->name('admin.product_category.slug');


Route::prefix('admin/product_category')->name('admin.product_category.')->controller(ProductCategoryController::class)->group(function() {
    Route::get('index','index')->name('index');
    Route::get('create','create')->name('create');
    Route::get('store','store')->name('store');
    Route::get('delete/{id}','delete')->name('delete');
    Route::get('detail/{id}','detail')->name('detail');
    Route::get('update/{id}','update')->name('update');
    Route::get('slug','slug')->name('slug');

});