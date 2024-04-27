<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\BookController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashBoardController;
use App\Http\Controllers\Client\HomeController;
use App\Http\Controllers\Client\ShowBooksController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Admin\PublisherController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//Ajax
Route::post('ajaxPost/submitForm', 'AjaxController@submitForm');


Route::get('/logon',[AdminController::class,'logon'])->name('logon');
Route::post('/logon',[AdminController::class,'postlogon'])->name('admin.logon');
Route::get('/logout',[AdminController::class,'logout'])->name('admin.logout');

Route::prefix('admin')->middleware('admin')->group(function () {
    Route::get('/', [DashBoardController::class, 'index'])->name('admin.index');
    Route::resource('category', CategoryController::class);
    Route::resource('book', BookController::class);
    Route::resource('publisher',PublisherController::class);
    Route::get('/book-restore',[BookController::class,'restore'])->name('book.trash');
    Route::get('/book-restore/{id}',[BookController::class,'restorebook'])->name('book.restore');
    Route::get('/book-force-delete/{id}',[BookController::class,'forcedelete'])->name('book.force-delete');

});

Route::get('/',[HomeController::class, 'index'])->name('index');
Route::get('/shop',[HomeController::class, 'shopping'])->name('shop');

Route::get('/login',[LoginController::class, 'login'])->name('login');
Route::post('/login',[LoginController::class, 'postLogin']);
Route::get('/register',[LoginController::class, 'register'])->name('register');
Route::post('/register',[LoginController::class, 'postRegister']);
Route::get('/logout',[LoginController::class, 'logout'])->name('admin.logout');

Route::get('categories/{category}',[ShowBooksController::class,'show'])->name('categories.show');
Route::get('book/{book}',[ShowBooksController::class,'detail'])->name('book.detail');

