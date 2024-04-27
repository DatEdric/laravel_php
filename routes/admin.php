<?php

use App\Http\Controllers\Admin\BookController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashBoardController;
use Illuminate\Support\Facades\Route;

Route::prefix('admin')->middleware('admin')->group(function () {
    Route::get('/', [DashBoardController::class, 'index'])->name('admin.index');
    Route::resource('category', CategoryController::class);
    Route::resource('book', BookController::class);
    Route::get('/book-restore',[BookController::class,'restore'])->name('book.trash');
    Route::get('/book-restore/{id}',[BookController::class,'restorebook'])->name('book.restore');
    Route::get('/book-force-delete/{id}',[BookController::class,'forcedelete'])->name('book.force-delete');

});


