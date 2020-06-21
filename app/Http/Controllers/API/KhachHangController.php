<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Helpers\UploadFile;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Hash;
use Tymon\JWTAuth\Facades\JWTAuth;
use Illuminate\Support\Facades\Validator;
use App\KhachHang;
use App\Http\Requests\KhachHang\DangKyRequest;
use App\Http\Requests\KhachHang\DangNhapRequest;

class KhachHangController extends Controller {
    public function layDanhSach(Request $req) {
        $gioiHan = 10;
        if (isset($req->gioiHan) && !empty($req->gioiHan)) {
            $gioiHan = $req->gioiHan;
        }
        $danhSach = KhachHang::where('id', '>', 0);
        if(!empty($req->ho_ten)) {
            $danhSach->where('ho_ten', 'like', '%'. $req->ho_ten . '%');
        }
        if(!empty($req->so_dien_thoai)) {
            $danhSach->whereSoDienThoai($req->so_dien_thoai);
        }
        $duLieu = $danhSach->paginate($gioiHan);
        $tuyChinh = collect([
            'message'   => 'Lấy danh sách khách hàng thành công!',
            'code'      => 200
        ]);
        $ketQua = $tuyChinh->merge($duLieu);
        return response()->json($ketQua);
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
        if($maXacThuc = auth('KhachHang')->attempt($thongTinDangNhap)) {
            $thongTinKhachHang = KhachHang::find(auth('KhachHang')->user()->id);
            $thongTinKhachHang['maXacThuc'] = $maXacThuc;
            return response()->json([
                'thongBao'       => 'Đăng nhập thành công!',
                'maPhanHoi'      => 200,
                'duLieu'         => $thongTinKhachHang,
            ]);
        }
        return response()->json([
            'thongBao'       => 'Tên đăng nhập hoặc mật khẩu không chính xác!',
            'maPhanHoi'      => 406
        ]);
    }

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
        $tonTaiTenDangNhap = KhachHang::whereTenDangNhap($req->ten_dang_nhap)->first();
        if(!empty($tonTaiTenDangNhap)) {
            return response()->json([
                'thongBao'  => 'Tên đăng ký đã tồn tại!',
                'maPhanHoi' => 406
            ]);
        }
        $vaiTro = Role::findByName('khachHang', 'KhachHang');
        $thongTinKhachHang = new KhachHang;
        $thongTinKhachHang->ten_dang_nhap = $req->ten_dang_nhap;
        $thongTinKhachHang->mat_khau = Hash::make($req->mat_khau);
        $thongTinKhachHang->save();
        $thongTinKhachHang->assignRole($vaiTro->name);
        $thongTinKhachHang->givePermissionTo($vaiTro);
        return response()->json([
            'thongBao'  => 'Đăng ký thành công!',
            'maPhanHoi' => 200,
            'duLieu'    => $thongTinKhachHang
        ]);
    }

    public function dangXuat() {
        auth('KhachHang')->logout();
        return response()->json([
            'thongBao'   => 'Đăng xuất thành công!',
            'maPhanHoi'  => 200
        ]);
    }

    public function quenMatKhau(Request $req) {

    }

    public function doiMatKhau(Request $req) {
        $thongTinKhachHang = KhachHang::whereId(JWTAuth::user()->id)->first();
        $kiemTraMatKhau = Hash::check($req->mat_khau_cu, $thongTinKhachHang->mat_khau);
        if(!empty($kiemTraMatKhau)) {
            if(isset($req->mat_khau_moi) && !empty($req->mat_khau_moi) && isset($req->nhap_lai_mat_khau_moi) && !empty($req->nhap_lai_mat_khau_moi)) {
                if(strcmp($req->mat_khau_moi, $req->nhap_lai_mat_khau_moi) != 0) {
                    return response()->json([
                        'thongBao'   => 'Nhập lại mật khẩu mới không trùng khớp!',
                        'maPhanHoi'  => 406
                    ]);
                }
                $thongTinKhachHang->update(['mat_khau' => Hash::make($req->mat_khau_moi)]);
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

    public function lamMoiMaXacThuc() {
        $maXacThucCu  = JWTAuth::getToken();
        $maXacThucMoi = JWTAuth::refresh($maXacThucCu);
        $thongTinKhachHang = KhachHang::find(JWTAuth::user()->id);
        $thongTinKhachHang['maXacThuc'] = $maXacThucMoi;
        return response()->json([
            'thongBao'   => 'Làm mới mã xác thực thành công!',
            'maPhanHoi'  => 200,
            'duLieu'     => $thongTinKhachHang
        ]);
    }

    public function capNhat(Request $req, $id) {
        if(JWTAuth::user()->id == $id  || JWTAuth::user()->roles[0]->name == 'admin' || JWTAuth::user()->roles[0]->name == 'superAdmin') {
            if(is_string($req->anh_dai_dien)) {
                $req->anh_dai_dien = json_decode($req->anh_dai_dien, true);
            }
            $thongTinKhachHang = KhachHang::find($id);
            if(empty($thongTinKhachHang)) {
                return response()->json([
                    'thongBao'   => 'Không tìm thấy thông tin khách hàng tương ứng!',
                    'maPhanHoi'  => 404
                ]);
            }
            if(isset($req->ho_ten) && !empty($req->ho_ten)) {
                $thongTinKhachHang->ho_ten = $req->ho_ten;
            }
            if(isset($req->gioi_tinh) && !empty($req->gioi_tinh)) {
                $thongTinKhachHang->gioi_tinh = $req->gioi_tinh;
            }
            if(isset($req->ngay_sinh) && !empty($req->ngay_sinh)) {
                $thongTinKhachHang->ngay_sinh = date('Y-m-d', strtotime($req->ngay_sinh));
            }
            if(isset($req->email) && !empty($req->email)) {
                if($req->email != $thongTinKhachHang->email) {
                    $tonTaiEmail = KhachHang::whereEmail($req->email)
                                            ->first();
                    if(!empty($tonTaiEmail)) {
                        return response()->json([
                            'thongBao'   => 'Email đã tồn tại!',
                            'maPhanHoi'  => 406
                        ]);
                    }
                }
                $thongTinKhachHang->email = $req->email;
            }
            if(isset($req->so_dien_thoai) && !empty($req->so_dien_thoai)) {
                if($req->so_dien_thoai != $thongTinKhachHang->so_dien_thoai) {
                    $tonTaiSoDienThoai = KhachHang::whereSoDienThoai($req->so_dien_thoai)
                                                  ->first();
                    if(!empty($tonTaiSoDienThoai)) {
                        return response()->json([
                            'thongBao'   => 'Số điện thoại đã tồn tại!',
                            'maPhanHoi'  => 406
                        ]);
                    }
                }
                $thongTinKhachHang->so_dien_thoai = $req->so_dien_thoai;
            }
            if(isset($req->dia_chi) && !empty($req->dia_chi)) {
                $thongTinKhachHang->dia_chi = $req->dia_chi;
            }
            $anhCu = $thongTinKhachHang->anh_dai_dien;
            if ($req->hasFile('anh_dai_dien') && $req->file('anh_dai_dien')->isValid()) {
                $thongTinKhachHang->anh_dai_dien = UploadFile::taiAnh($req->anh_dai_dien, 'khach-hang');
                UploadFile::xoaAnh($anhCu, 'khach-hang');
            }
            $thongTinKhachHang->save();
            return response()->json([
                'thongBao'       => 'Cập nhật thành công!',
                'maPhanHoi'      => 200,
                'duLieu'         => $thongTinKhachHang,
            ]);
        }
        return response()->json([
            'thongBao'   => 'Không thể cập nhật thông tin tài khoản khác!',
            'maPhanHoi'  => 403
        ]);
    }
}
