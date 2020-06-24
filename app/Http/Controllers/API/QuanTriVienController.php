<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Hash;
use Tymon\JWTAuth\Facades\JWTAuth;
use Illuminate\Support\Facades\Validator;
use App\QuanTriVien;
use App\Http\Requests\QuanTriVien\DangKyRequest;
use App\Http\Requests\QuanTriVien\DangNhapRequest;

class QuanTriVienController extends Controller {
    public function dangKy(Request $req) {
        $hopLe = new DangKyRequest;
        $thamDinh = Validator::make($req->all(), $hopLe->rules(), $hopLe->messages());
        $thongBaoLoi = $thamDinh->messages()->first();
        if ($thamDinh->fails()) {
            return response()->json([
                'thongBao'   => $thongBaoLoi,
                'maPhanHoi'  => 406
            ]);
        }
        $tonTaiTenDangNhap = QuanTriVien::whereTenDangNhap($req->ten_dang_nhap)->first();
        if(!empty($tonTaiTenDangNhap)) {
            return response()->json([
                'thongBao'  => 'Tên đăng nhập đã tồn tại!',
                'maPhanHoi' => 406
            ]);
        }
        $vaiTro = Role::findByName('quanTriVien', 'QuanTriVien');
        $thongTinQuanTriVien = new QuanTriVien;
        $thongTinQuanTriVien->ten_dang_nhap = $req->ten_dang_nhap;
        $thongTinQuanTriVien->mat_khau = Hash::make($req->mat_khau);
        $thongTinQuanTriVien->save();
        $thongTinQuanTriVien->assignRole($vaiTro->name)
                            ->givePermissionTo([
                                'thamSo',
                                'khachHang',
                                'lichSuDiem',
                                'hoaDonBan',
                                'chiTietHoaDonBan',
                                'thucUong',
                                'loaiThucUong',
                                'nhanVien',
                                'loaiNhanVien',
                                'hoaDonNhap',
                                'chiTietHoaDonNhap',
                                'nguyenLieu',
                            ]);
        return response()->json([
            'thongBao'  => 'Đăng ký thành công!',
            'maPhanHoi' => 200,
            'duLieu'    => $thongTinQuanTriVien
        ]);
    }

    public function dangNhap(Request $req) {
        $hopLe = new DangNhapRequest;
        $thamDinh = Validator::make($req->all(), $hopLe->rules(), $hopLe->messages());
        $thongBaoLoi = $thamDinh->messages()->first();
        if ($thamDinh->fails()) {
            return response()->json([
                'thongBao'   => $thongBaoLoi,
                'maPhanHoi'  => 406
            ]);
        }
        $thongTinDangNhap = [
            'ten_dang_nhap' => $req->ten_dang_nhap,
            'password'      => $req->mat_khau
        ];
        if($maXacThuc = auth('QuanTriVien')->attempt($thongTinDangNhap)) {
            return response()->json([
                'thongBao'       => 'Đăng nhập thành công!',
                'maPhanHoi'      => 200,
                'maXacThuc'      => $maXacThuc
            ]);
        }
        return response()->json([
            'thongBao'       => 'Tên đăng nhập hoặc mật khẩu không chính xác!',
            'maPhanHoi'      => 406
        ]);
    }

    public function dangXuat() {
        auth('QuanTriVien')->logout();
        return response()->json([
            'thongBao'   => 'Đăng xuất thành công!',
            'maPhanHoi'  => 200
        ]);
    }

    public function quenMatKhau() {

    }

    public function doiMatKhau(Request $req) {
        $thongTinQuanTriVien = QuanTriVien::whereId(JWTAuth::user()->id)->first();
        $kiemTraMatKhau = Hash::check($req->mat_khau_cu, $thongTinQuanTriVien->mat_khau);
        if(!empty($kiemTraMatKhau)) {
            if(isset($req->mat_khau_moi) && !empty($req->mat_khau_moi) && isset($req->nhap_lai_mat_khau_moi) && !empty($req->nhap_lai_mat_khau_moi)) {
                if(strcmp($req->mat_khau_moi, $req->nhap_lai_mat_khau_moi) != 0) {
                    return response()->json([
                        'thongBao'   => 'Nhập lại mật khẩu mới không trùng khớp!',
                        'maPhanHoi'  => 406
                    ]);
                }
                return response()->json([
                    'thongBao'   => 'Đổi mật khẩu thành công!',
                    'maPhanHoi'  => 200
                ]);
            }
        }
        return response()->json([
            'thongBao'   => 'Mật khẩu cũ không đúng!',
            'maPhanHoi'  => 406
        ]);
    }

    public function capNhat(Request $req, $id) {
        if(JWTAuth::user()->id == $id || JWTAuth::user()->roles[0]->name == 'admin' || WJTAuth::user()->roles[0]->name == 'superAdmin') {
            if(is_string($req->anh_dai_dien)) {
                $req->anh_dai_dien = json_decode($req->anh_dai_dien, true);
            }
            $thongTinQuanTriVien = QuanTriVien::find($id);
            if(empty($thongTinQuanTriVien)) {
                return response()->json([
                    'thongBao'   => 'Không tìm thấy thông tin quản trị viên tương ứng!',
                    'maPhanHoi'  => 403
                ]);
            }
            if(isset($req->ho_ten) && !empty($req->ho_ten)) {
                $thongTinQuanTriVien->ho_ten = $req->ho_ten;
            }
            if(isset($req->mat_khau) && !empty($req->mat_khau)) {
                $thongTinQuanTriVien->mat_khau = $req->mat_khau;
            }
            $thongTinQuanTriVien->save();
            return response()->json([
                'thongBao'       => 'Cập nhật thành công!',
                'maPhanHoi'      => 200,
                'duLieu'         => $thongTinQuanTriVien,
            ]);
        }
        return response()->json([
            'thongBao'   => 'Không thể cập nhật thông tin quản trị viên khác!',
            'maPhanHoi'  => 403
        ]);
    }

    public function lamMoiMaXacThuc() {
        $maXacThucCu = JWTAuth::getToken();
        $maXacThucMoi = JWTAuth::refresh($maXacThucCu);
        $thongTinQuanTriVien = QuanTriVien::find(JWTAuth::user()->id);
        $thongTinQuanTriVien['maXacThuc'] = $maXacThucMoi;
        return response()->json([
            'thongBao'   => 'Làm mới mã xác thực thành công!',
            'maPhanHoi'  => 200,
            'duLieu'     => $thongTinQuanTriVien
        ]);
    }
}
