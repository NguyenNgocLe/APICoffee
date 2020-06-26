<?php

use Illuminate\Http\Request;

Route::prefix('/nhan-vien')->group(function () {
    Route::middleware('assign.guard:nhan_vien')->group(function() {
        Route::post('/dang-nhap', 'API\NhanVienController@login');
        Route::post('/quen-mat-khau', 'API\NhanVienController@forgetPassword');
        Route::post('/dat-lai-mat-khau/{id}', 'API\NhanVienController@resetPassword');
        Route::middleware('jwt.auth')->group(function() {
            Route::post('/dang-xuat', 'API\NhanVienController@logout');
            Route::get('/', 'API\NhanVienController@index');
            Route::post('/', 'API\NhanVienController@store');
            Route::get('/{id}', 'API\NhanVienController@show');
            Route::post('/{id}', 'API\NhanVienController@update');
            Route::delete('/', 'API\NhanVienController@destroy');
        });
    });
});

Route::prefix('/khach-hang')->group(function () {
    Route::middleware('assign.guard:khach_hang')->group(function() {
        Route::post('/dang-nhap', 'API\KhachHangController@login');
        Route::middleware('jwt.auth')->group(function() {
            Route::post('/dang-xuat', 'API\KhachHangController@logout');
            Route::get('/', 'API\KhachHangController@index');
            Route::post('/', 'API\KhachHangController@store');
            Route::get('/{id}', 'API\KhachHangController@show');
            Route::post('/{id}', 'API\KhachHangController@update');
            Route::delete('/', 'API\KhachHangController@destroy');
        });
    });
});

Route::middleware('assign.guard:khach_hang|nhan_vien', 'jwt.auth')->group(function() {
    Route::prefix('/tham-so')->group(function () {
        Route::get('/', 'API\ThamSoController@index');
        Route::post('/', 'API\ThamSoController@store');
        Route::get('/{id}', 'API\ThamSoController@show');
        Route::post('/{id}', 'API\ThamSoController@update');
        Route::delete('/', 'API\ThamSoController@destroy');
    });
    Route::prefix('/loai-nhan-vien')->group(function () {
        Route::get('/', 'API\LoaiNhanVienController@index');
        Route::post('/', 'API\LoaiNhanVienController@store');
        Route::get('/{id}', 'API\LoaiNhanVienController@show');
        Route::post('/{id}', 'API\LoaiNhanVienController@update');
        Route::delete('/', 'API\LoaiNhanVienController@destroy');
    });
    Route::prefix('/loai-thuc-uong')->group(function () {
        Route::get('/', 'API\LoaiThucUongController@index');
        Route::post('/', 'API\LoaiThucUongController@store');
        Route::get('/{id}', 'API\LoaiThucUongController@show');
        Route::post('/{id}', 'API\LoaiThucUongController@update');
        Route::delete('/', 'API\LoaiThucUongController@destroy');
    });
    Route::prefix('/lich-su-diem')->group(function () {
        Route::get('/', 'API\LichSuDiemController@index');
        Route::post('/', 'API\LichSuDiemController@store');
        Route::get('/{id}', 'API\LichSuDiemController@show');
        Route::post('/{id}', 'API\LichSuDiemController@update');
        Route::delete('/', 'API\LichSuDiemController@destroy');
    });
    Route::prefix('/nguyen-lieu')->group(function () {
        Route::get('/', 'API\NguyenLieuController@index');
        Route::post('/', 'API\NguyenLieuController@store');
        Route::get('/{id}', 'API\NguyenLieuController@show');
        Route::post('/{id}', 'API\NguyenLieuController@update');
        Route::delete('/', 'API\NguyenLieuController@destroy');
    });
    Route::prefix('/thuc-uong')->group(function () {
        Route::get('/', 'API\ThucUongController@index');
        Route::post('/', 'API\ThucUongController@store');
        Route::get('/{id}', 'API\ThucUongController@show');
        Route::post('/{id}', 'API\ThucUongController@update');
        Route::delete('/', 'API\ThucUongController@destroy');
    });
    Route::prefix('/hoa-don-nhap')->group(function () {
        Route::get('/', 'API\HoaDonNhapController@index');
        Route::post('/', 'API\HoaDonNhapController@store');
        Route::get('/{id}', 'API\HoaDonNhapController@show');
        Route::post('/{id}', 'API\HoaDonNhapController@update');
        Route::delete('/', 'API\HoaDonNhapController@destroy');
    });
    Route::prefix('/hoa-don-ban')->group(function () {
        Route::get('/', 'API\HoaDonBanController@index');
        Route::post('/', 'API\HoaDonBanController@store');
        Route::get('/{id}', 'API\HoaDonBanController@show');
        Route::post('/{id}', 'API\HoaDonBanController@update');
        Route::delete('/', 'API\HoaDonBanController@destroy');
    });
    Route::prefix('/chi-tiet-hoa-don-nhap')->group(function () {
        Route::get('/', 'API\ChiTietHoaDonNhapController@index');
        Route::post('/', 'API\ChiTietHoaDonNhapController@store');
        Route::get('/{id}', 'API\ChiTietHoaDonNhapController@show');
        Route::post('/{id}', 'API\ChiTietHoaDonNhapController@update');
        Route::delete('/', 'API\ChiTietHoaDonNhapController@destroy');
    });
    Route::prefix('/chi-tiet-hoa-don-ban')->group(function () {
        Route::get('/', 'API\ChiTietHoaDonBanController@index');
        Route::post('/', 'API\ChiTietHoaDonBanController@store');
        Route::get('/{id}', 'API\ChiTietHoaDonBanController@show');
        Route::post('/{id}', 'API\ChiTietHoaDonBanController@update');
        Route::delete('/', 'API\ChiTietHoaDonBanController@destroy');
    });
});