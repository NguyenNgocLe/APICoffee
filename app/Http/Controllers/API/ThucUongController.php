<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Tymon\JWTAuth\Facades\JWTAuth;
use App\ThucUong;
use App\KhachHang;
use App\NhanVien;

class ThucUongController extends Controller {
    public function layDanhSach(Request $req) {
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
}
