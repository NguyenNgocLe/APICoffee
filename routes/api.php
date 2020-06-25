<?php

use Illuminate\Http\Request;

Route::prefix('/nhan-vien')->group(function () {
    Route::middleware('assign.guard:nhan_vien')->group(function() {
        Route::post('/dang-nhap', 'API\NhanVienController@login');
        Route::post('/quen-mat-khau', 'NhanVienController@forgetPassword');
        Route::post('/dat-lai-mat-khau/{id}', 'NhanVienController@resetPassword');
        Route::middleware('jwt.auth')->group(function() {
            Route::get('/', 'NhanVienController@index');
            Route::post('/', 'NhanVienController@store');
            Route::get('/{id}', 'NhanVienController@show');
            Route::post('/{id}', 'NhanVienController@update');
            Route::delete('/', 'NhanVienController@destroy');
            Route::post('/dang-xuat', 'API\NhanVienController@logout');
        });
    });
});

Route::prefix('/khach-hang')->group(function () {
    Route::middleware('assign.guard:khach_hang')->group(function() {
        Route::post('/dang-nhap', 'API\KhachHangController@login');
        Route::middleware('jwt.auth')->group(function() {
            Route::get('/', 'API\KhachHangController@index');
            Route::post('/', 'KhachHangController@store');
            Route::get('/{id}', 'KhachHangController@show');
            Route::post('/{id}', 'KhachHangController@update');
            Route::delete('/', 'KhachHangController@destroy');
            Route::post('/dang-xuat', 'API\KhachHangController@logout');
        });
    });
});

Route::middleware('jwt.auth')->group(function() {
    Route::prefix('/tham-so')->group(function () {
        Route::get('/', 'API\ThamSoController@index');
        Route::post('/', 'ThamSoController@store');
        Route::get('/{id}', 'ThamSoController@show');
        Route::post('/{id}', 'ThamSoController@update');
        Route::delete('/', 'ThamSoController@destroy');
    });
    Route::prefix('/loai-nhan-vien')->group(function () {
        Route::get('/', 'LoaiNhanVienController@index');
        Route::post('/', 'LoaiNhanVienController@store');
        Route::get('/{id}', 'LoaiNhanVienController@show');
        Route::post('/{id}', 'LoaiNhanVienController@update');
        Route::delete('/', 'LoaiNhanVienController@destroy');
    });
    Route::prefix('/loai-thuc-uong')->group(function () {
        Route::get('/', 'LoaiThucUongController@index');
        Route::post('/', 'LoaiThucUongController@store');
        Route::get('/{id}', 'LoaiThucUongController@show');
        Route::post('/{id}', 'LoaiThucUongController@update');
        Route::delete('/', 'LoaiThucUongController@destroy');
    });
    Route::prefix('/lich-su-diem')->group(function () {
        Route::get('/', 'LichSuDiemController@index');
        Route::post('/', 'LichSuDiemController@store');
        Route::get('/{id}', 'LichSuDiemController@show');
        Route::post('/{id}', 'LichSuDiemController@update');
        Route::delete('/', 'LichSuDiemController@destroy');
    });
    Route::prefix('/nguyen-lieu')->group(function () {
        Route::get('/', 'NguyenLieuController@index');
        Route::post('/', 'NguyenLieuController@store');
        Route::get('/{id}', 'NguyenLieuController@show');
        Route::post('/{id}', 'NguyenLieuController@update');
        Route::delete('/', 'NguyenLieuController@destroy');
    });
    Route::prefix('/thuc-uong')->group(function () {
        Route::get('/', 'ThucUongController@index');
        Route::post('/', 'ThucUongController@store');
        Route::get('/{id}', 'ThucUongController@show');
        Route::post('/{id}', 'ThucUongController@update');
        Route::delete('/', 'ThucUongController@destroy');
    });
    Route::prefix('/hoa-don-nhap')->group(function () {
        Route::get('/', 'HoaDonNhapController@index');
        Route::post('/', 'HoaDonNhapController@store');
        Route::get('/{id}', 'HoaDonNhapController@show');
        Route::post('/{id}', 'HoaDonNhapController@update');
        Route::delete('/', 'HoaDonNhapController@destroy');
    });
    Route::prefix('/hoa-don-ban')->group(function () {
        Route::get('/', 'HoaDonBanController@index');
        Route::post('/', 'HoaDonBanController@store');
        Route::get('/{id}', 'HoaDonBanController@show');
        Route::post('/{id}', 'HoaDonBanController@update');
        Route::delete('/', 'HoaDonBanController@destroy');
    });
    Route::prefix('/chi-tiet-hoa-don-nhap')->group(function () {
        Route::get('/', 'ChiTietHoaDonNhapController@index');
        Route::post('/', 'ChiTietHoaDonNhapController@store');
        Route::get('/{id}', 'ChiTietHoaDonNhapController@show');
        Route::post('/{id}', 'ChiTietHoaDonNhapController@update');
        Route::delete('/', 'ChiTietHoaDonNhapController@destroy');
    });
    Route::prefix('/chi-tiet-hoa-don-ban')->group(function () {
        Route::get('/', 'ChiTietHoaDonBanController@index');
        Route::post('/', 'ChiTietHoaDonBanController@store');
        Route::get('/{id}', 'ChiTietHoaDonBanController@show');
        Route::post('/{id}', 'ChiTietHoaDonBanController@update');
        Route::delete('/', 'ChiTietHoaDonBanController@destroy');
    });
});