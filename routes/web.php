<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/news', function() {
    echo 'news page!';
});

Route::get('/trang-chu/product/{id?}', function($id = 1) {
    echo $id;
});

Route::get('text',function() {
    return view('text');
});
Route::get('sinh-vien', function() {
    return view('sinhvien/sinhvien');
});