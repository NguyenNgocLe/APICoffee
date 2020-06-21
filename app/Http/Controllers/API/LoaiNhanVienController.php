<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Hash;
use Tymon\JWTAuth\Facades\JWTAuth;
use Illuminate\Support\Facades\Validator;
use App\LoaiNhanVien;

class LoaiNhanVienController extends Controller {
    public function themMoi(Request $req) {
        $tonTaiTenDangNhap = LoaiNhanVien::whereTenLoai($req->ten_loai)->first();
        if(empty($req->ten_loai)) {
            return response()->json([
                'thongBao'  => 'Tên loại nhân viên không được trống!',
                'maPhanHoi' => 406
            ]);
        }
        if(!empty($tonTaiTenDangNhap)) {
            return response()->json([
                'thongBao'  => 'Tên loại nhân viên đã tồn tại!',
                'maPhanHoi' => 406
            ]);
        }
        $vaiTro = Role::findByName('quanTriVien', 'QuanTriVien');
        $thongTinLoaiNhanVien = new LoaiNhanVien;
        $thongTinLoaiNhanVien->ten_loai = $req->ten_loai;
        $thongTinLoaiNhanVien->save();
        return response()->json([
            'thongBao'  => 'Đăng ký thành công!',
            'maPhanHoi' => 200,
            'duLieu'    => $thongTinLoaiNhanVien
        ]);
    }
}
