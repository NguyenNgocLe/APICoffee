<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Hash;
use Tymon\JWTAuth\Facades\JWTAuth;
use Illuminate\Support\Facades\Validator;
use App\NhanVien;
use App\LoaiNhanVien;
use App\Http\Requests\NhanVien\DangKyRequest;
use App\Http\Requests\NhanVien\DangNhapRequest;

class NhanVienController extends Controller {
    public function dangKy(Request $req) {
        $thongTinLoaiNhanVien = LoaiNhanVien::whereId($req->loai_nhan_vien_id)
                                            ->first();
        if(empty($thongTinLoaiNhanVien)) {
            return response()->json([
                'thongBao'  => 'Không tìm thấy thông tin loại nhân viên tương ứng!',
                'maPhanHoi' => 404
            ]);
        }
        $tonTaiTenDangNhap = NhanVien::whereTenDangNhap($req->ten_dang_nhap)->first();
        if(!empty($tonTaiTenDangNhap)) {
            return response()->json([
                'thongBao'  => 'Tên đăng nhập đã tồn tại!',
                'maPhanHoi' => 406
            ]);
        }
        $guard = '';
        if($req->kieu_nv == 'thuNgan') {
            $guard = 'ThuNgan';
        } else if($req->kieu_nv == 'phaChe') {
            $guard = 'PhaChe';
        } else if($req->kieu_nv == 'phucVu') {
            $guard = 'PhucVu';
        } else if($req->kieu_nv == 'kho') {
            $guard = 'Kho';
        }
        $vaiTro = Role::findByName($req->kieu_nv, $guard);
        $thongTinNhanVien = new NhanVien;
        $thongTinNhanVien->ten_dang_nhap = $req->ten_dang_nhap;
        $thongTinNhanVien->loai_nhan_vien_id = $thongTinLoaiNhanVien->id;
        $thongTinNhanVien->mat_khau = Hash::make($req->mat_khau);
        $thongTinNhanVien->save();
        $thongTinNhanVien->assignRole([$vaiTro->name]);
        if($req->kieu_nv == 'thuNgan') {
            $thongTinNhanVien->givePermissionTo([
                    'tnLichSuDiem',
                    'tnHoaDonBan',
                    'tnChiTietHoaDonBan',
                    'tnThucUong',
                    'tnLoaiThucUong',
                ]);
        } else if($req->kieu_nv == 'phaChe') {
            $thongTinNhanVien->givePermissionTo([
                'pcHoaDonBan',
                'pcChiTietHoaDonBan',
            ]);
        } else if($req->kieu_nv == 'phucVu') {
            $thongTinNhanVien->givePermissionTo([
                'pvHoaDonBan',
                'pvChiTietHoaDonBan',
            ]);
        } else if($req->kieu_nv == 'kho') {
            $thongTinNhanVien->givePermissionTo([
                'kHoaDonNhap',
                'kChiTietHoaDonNhap',
                'kNguyenLieu'
            ]);
        }
        return response()->json([
            'thongBao'  => 'Đăng ký tài khoản thành công!',
            'maPhanHoi' => 200,
            'duLieu'    => $thongTinNhanVien
        ]);
    }

    public function dangNhap(Request $req) {
        $hopLe = new DangNhapRequest;
        $thamDinh = Validator::make($req->all(), $hopLe->rules(), $hopLe->messages());
        $thongBaoLoi = $thamDinh->messages()->first();
        if ($thamDinh->fails()) {
            return response()->json([
                'thongBao'  => $thongBaoLoi,
                'maPhanHoi' => 406
            ]);
        }
        $thongTinDangNhap = [
            'ten_dang_nhap' => $req->ten_dang_nhap,
            'mat_khau'      => $req->mat_khau
        ];
        if($maXacThuc = auth('NhanVien')->attempt($thongTinDangNhap)) {
            $thongTinNhanVien = NhanVien::find(auth('NhanVien')->user()->id());
            $thongTinNhanVien['maXacThuc'] = $maXacThuc;
            return response()->json([
                'thongBao'  => 'Đăng nhập thành công!',
                'maPhanHoi' => 200,
                'duLieu'    => $thongTinNhanVien
            ]);
        }
        return response()->json([
            'thongBao'  => 'Tên đăng nhập hoặc mật khẩu không chính xác!',
            'maPhanHoi' => 406,
            'duLieu'    => $thongTinNhanVien
        ]);
    }

    public function quenMatKhau() {

    }

    public function capNhatThongTin() {

    }

    public function lamMoiMaXacThuc() {

    }
}
