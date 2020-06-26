<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Tymon\JWTAuth\Facades\JWTAuth;
use App\ThucUong;
use App\KhachHang;
use App\NhanVien;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\ThucUong\DanhSachRequest;
use App\Helpers\FitRoles;

class ThucUongController extends Controller {
    public function layDanhSach(Request $req) {
        $hopLe = new DanhSachRequest;
        $thamDinh = Validator::make($req->all(), $hopLe->rules(), $hopLe->messages());
        $thongBaoLoi = $thamDinh->messages()->first();
        if($thamDinh->fails()) {
            return response()->json([
                'thongBao'  => $thongBaoLoi,
                'maPhanHoi' => 406
            ]);
        }
        var_dump(FitRoles::getRoleName(auth("NhanVien")->user()));
        exit;
        if(FitRoles::isRoles(auth('KhachHang')->user() || FitRoles::isRoles(auth('NhanVien')->user()), 'Quản trị viên|Nhân viên pha chế|Nhân viên phục vụ|Nhân viên kho|khách hàng')) {
            $gioiHan = 10;
            if (isset($req->gioiHan) && !empty($req->gioiHan)) {
                $gioiHan = $req->gioiHan;
            }
            $danhSach = ThucUong::where('id', '>', 0);
            if(!empty($req->loai_thuc_uong_id)) {
                $danhSach->whereLoaiThucUongId($req->loai_thuc_uong_id);
            }
            if(!empty($req->ten_thuc_uong)) {
                $danhSach->where('ten_thuc_uong', 'like', '%'. $req->ten_thuc_uong . '%');
            }
            if(!empty($req->don_gia)) {
                $danhSach->whereDonGia($req->don_gia);
            }
            $danhSach->orderBy('ten_thuc_uong', 'DESC')
                    ->orderBy('don_gia', 'DESC');
            $duLieu = $danhSach->paginate($gioiHan);
            $tuyChinh = collect([
                'message'   => 'Lấy danh sách thức uống thành công!',
                'code'      => 200
            ]);
            $ketQua = $tuyChinh->merge($duLieu);
            return response()->json($ketQua);
        }
        return response()->json([
            'message'   => 'Lấy danh sách thức uống thất bại!',
            'code'      => 406
        ]);
    }
}
