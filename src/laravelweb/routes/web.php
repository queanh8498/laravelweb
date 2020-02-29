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
use App\NhanVien;

Route::get('/', function () {
    return view('welcome');
});

//Tạo route cho phép chuyển đổi ngôn ngữ
Route::get('setLocale/{locale}', function ($locale) {
    if (in_array($locale, Config::get('app.locales'))) {
      Session::put('locale', $locale);
    }
    return redirect()->back();
})->name('app.setLocale');


// route Danh mục Sản phẩm
Route::get('/admin/danhsachsanpham/index', 'SanPhamController@index')->name('danhsachsanpham.index');
Route::get('/admin/danhsachsanpham/create', 'SanPhamController@create')->name('danhsachsanpham.create');

Route::get('/admin/danhsachsanpham/print', 'SanPhamController@print')->name('danhsachsanpham.print');
Route::get('/admin/danhsachsanpham/excel', 'SanPhamController@excel')->name('danhsachsanpham.excel');

Route::resource('/admin/danhsachsanpham', 'SanPhamController');

Route::get('/admin/danhsachsanpham', 'SanPhamController@index')
        ->middleware('auth')
        ->name('backend.sanpham.index');

// route Danh mục Loại

Route::resource('/admin/danhsachloai', 'LoaiController');
//cap quyen
Route::get('/capquyen', function(){

    //user1 & user2 = ketoan
    $user1 = NhanVien::find(1);
    $user1->givePermissionTo('sp_xem');
    $user1->givePermissionTo('sp_print');
    $user1->givePermissionTo('sp_excel');

    $user1->givePermissionTo('l_xem');


    $user2 = Nhanvien::find(2);
    $user2->givePermissionTo('sp_xem');
    $user2->givePermissionTo('sp_print');
    $user2->givePermissionTo('sp_excel');

    $user2->givePermissionTo('l_xem');


    //user3 & user4 = thukho
    $user3 = Nhanvien::find(3);
    $user3->givePermissionTo('kho_xem');
    $user3->givePermissionTo('kho_them');
    $user3->givePermissionTo('kho_sua');
    $user3->givePermissionTo('kho_xoa');

    $user4 = Nhanvien::find(3);
    $user4->givePermissionTo('kho_xem');
    $user4->givePermissionTo('kho_them');
    $user4->givePermissionTo('kho_sua');
    $user4->givePermissionTo('kho_xoa');

    //user100 = admin
    $user100 = Nhanvien::find(100);
    $user100->givePermissionTo('sp_xem');
    $user100->givePermissionTo('sp_them');
    $user100->givePermissionTo('sp_sua');
    $user100->givePermissionTo('sp_xoa');
    $user100->givePermissionTo('sp_excel');
    $user100->givePermissionTo('sp_print');

    $user100->givePermissionTo('l_xem');
    $user100->givePermissionTo('l_them');
    $user100->givePermissionTo('l_sua');
    $user100->givePermissionTo('l_xoa');
    
    return 'cap quyen okey';
});

Auth::routes();
//sua
//Route::get('/login', 'HomeController@index')->name('login');
//Route::get('/login', 'Backend\BackendController')->name('login');


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

//Tạo trang danh sách Sản phẩm (product)
Route::get('/san-pham', 'Frontend\FrontendController@product')->name('frontend.product');

//Tạo trang Chi tiết Sản phẩm (product-detail)
Route::get('/san-pham/{id}', 'FrontendController@productDetail')->name('frontend.productDetail');

//Tạo trang thanh toán (checkout)
Route::get('/gio-hang', 'Frontend\FrontendController@cart')->name('frontend.cart');

//Tạo đơn hàng và gởi mail xác nhận
Route::get('/gio-hang', 'Frontend\FrontendController@cart')->name('frontend.cart');
Route::post('/dat-hang', 'Frontend\FrontendController@order')->name('frontend.order');
Route::get('/dat-hang/hoan-tat', 'Frontend\FrontendController@orderFinish')->name('frontend.orderFinish');