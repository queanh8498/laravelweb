<?php

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

Route::get('/', function () {
    return view('welcome');
});

// route Danh mục Sản phẩm

Route::get('/admin/danhsachsanpham/excel', 'SanPhamController@excel')->name('danhsachsanpham.excel');
Route::get('/admin/danhsachsanpham/print', 'SanPhamController@print')->name('danhsachsanpham.print');

Route::resource('/admin/danhsachsanpham', 'SanPhamController');

// route Danh mục Loại

Route::resource('/admin/danhsachloai', 'LoaiController');

// route Danh mục Chủ đề

Route::resource('/admin/danhsachchude', 'ChuDeController');
