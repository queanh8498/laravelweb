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
<<<<<<< HEAD
    //->middleware('auth')
    //->name('backend.sanpham.index');
=======

<<<<<<< HEAD
//Route::get('/admin/danhsachsanpham', 'SanPhamController')->middleware('auth');

=======
>>>>>>> 323786607dc8b692a3f1180fdef80f65aead5f9b
>>>>>>> 0366a1524d0c3a9274438aaa4892deed98a695b9

// route Danh mục Loại

Route::resource('/admin/danhsachloai', 'LoaiController');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/admin/activate/{nv_ma}', 'Backend\BackendController@activate')->name('activate');

//Thực hiện tạo giao diện trang chủ Frontend
Route::get('/', 'Frontend\FrontendController@index')->name('frontend.home');

//Thực hiện tạo giao diện trang Giới thiệu (about)
Route::get('/gioi-thieu', 'Frontend\FrontendController@about')->name('frontend.about');

//Thực hiện tạo giao diện trang Liên hệ (contact)
Route::get('/lien-he', 'Frontend\FrontendController@contact')->name('frontend.contact');

//tạo route sendMailContactForm
Route::post('/lien-he/goi-loi-nhan', 'Frontend\FrontendController@sendMailContactForm')->name('frontend.contact.sendMailContactForm');