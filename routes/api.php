<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::group(['prefix' => 'quan-tri-vien'], function () {
    Route::post('dang-ky', 'API\QuanTriVienController@dangKy');
    Route::post('dang-nhap', 'API\QuanTriVienController@dangNhap');
    Route::middleware(['assign.guard:QuanTriVien|KhachHang|ThuNgan|Kho|Shipper|PhaChe|PhucVu', 'jwt.auth', 'role:quanTriVien'])->group(function() {
        Route::post('dang-xuat', 'API\QuanTriVienController@dangXuat');
        Route::post('lam-moi-ma-xac-thuc', 'API\QuanTriVienController@lamMoiMaXacThuc');
        Route::post('doi-mat-khau', 'API\QuanTriVienController@doiMatKhau');
        Route::post('cap-nhat/{id}', 'API\QuanTriVienController@capNhat');
    });
});

Route::group(['prefix' => 'khach-hang'], function () {
    Route::post('dang-ky', 'API\KhachHangController@dangKy');
    Route::post('dang-nhap', 'API\KhachHangController@dangNhap');
    Route::middleware(['assign.guard:QuanTriVien|KhachHang|ThuNgan|Kho|Shipper|PhaChe|PhucVu', 'jwt.auth', 'role:khachHang'])->group(function() {
        Route::post('dang-xuat', 'API\KhachHangController@dangXuat');
        Route::post('lam-moi-ma-xac-thuc', 'API\KhachHangController@lamMoiMaXacThuc');
        Route::post('doi-mat-khau', 'API\KhachHangController@doiMatKhau');
    });

    Route::middleware(['assign.guard:QuanTriVien|KhachHang|ThuNgan|Kho|Shipper|PhaChe|PhucVu', 'jwt.auth', 'role:khachHang|quanTriVien|quanTriVienToanQuyen'])->group(function() {
        Route::post('danh-sach-thuc-uong', 'API\KhachHangController@dangXuat');
        Route::post('cap-nhat/{id}', 'API\KhachHangController@capNhat');
    });
});

Route::group(['prefix' => 'loai-nhan-vien'], function () {
    Route::middleware(['assign.guard:QuanTriVien|KhachHang|ThuNgan|Kho|Shipper|PhaChe|PhucVu', 'jwt.auth', 'role:quanTriVien|quanTriVienToanQuyen'])->group(function() {
        Route::post('them-moi', 'API\LoaiNhanVienController@themMoi');
    });
});

Route::group(['prefix' => 'nhan-vien'], function () {
    Route::post('dang-ky/{id}', 'API\NhanVienController@dangKy');
    Route::post('dang-nhap', 'API\NhanVienController@dangNhap');
});

Route::group(['prefix' => 'thuc-uong'], function () {
    Route::middleware(['assign.guard:QuanTriVien|KhachHang|ThuNgan|Kho|Shipper|PhaChe|PhucVu', 'jwt.auth', 'role:khachHang|quanTriVien|quanTriVienToanQuyen|thuNgan|shipper|phaChe|phucVu'])->group(function() {
        Route::get('danh-sach', 'API\ThucUongController@layDanhSach');
    });
});
