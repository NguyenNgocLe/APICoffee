<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Carbon\Carbon;
use App\HoaDonBan;
use App\KhachHang;
use App\NhanVien;
use App\Http\Requests\HoaDonBan\ThemRequest;

class HoaDonBanController extends Controller {

    public function themMoi(Request $req) {
        $thongTinNhanVien = NhanVien::find($req->id);
        $thongTinKhachHang = KhachHang::find($req->id);
        $thongTinNhanVien = NhanVien::where('id', $req->nhan_vien_id)->get();
        $thongTinKhachHang = KhachHang::where('id', $req->khach_hang_id)->get();
        $hopLe = new ThemRequest;
        $thamDinh = Validator::make($req->all(), $hopLe->rules(), $hopLe->messages());
        $thongBaoLoi = $thamDinh->messages()->first();
        if($thamDinh->fails()) {
            return response()->json([
                'thongBao'   => $thongBaoLoi,
                'maPhanHoi'  => 406
            ]);
        }
        if(count($thongTinNhanVien) == 0) {
            return response()->json([
                'thongBao'  => 'Không tìm thấy thông tin nhân viên tương ứng!',
                'maPhanHoi' => 406
            ]);
        }
        if(count($thongTinKhachHang) == 0) {
            return response()->json([
                'thongBao'  => 'Không tìm thấy thông tin khách hàng tương ứng!',
                'maPhanHoi' => 406
            ]);
        }
        $thongTinHoaDonBan = new HoaDonBan;
        $thongTinHoaDonBan->nhan_vien_id  = $req->nhan_vien_id;
        $thongTinHoaDonBan->khach_hang_id = $req->khach_hang_id;
        $thongTinHoaDonBan->ngay_ban      = Carbon::now();
        $thongTinHoaDonBan->tong_tien     = $req->tong_tien;
        $thongTinHoaDonBan->diem          = $req->diem;
        $thongTinHoaDonBan->ghi_chu       = $req->ghi_chu;
        $thongTinHoaDonBan->save();
        return response()->json([
            'thongBao'  => 'Thêm hóa đơn bán thành công!',
            'maPhanHoi' => 200,
            'duLieu'    => $thongTinHoaDonBan
        ]);
    }

    public function capNhat(Request $req) {
        $thongTinNhanVien = NhanVien::find($req->id);
        $thongTinKhachHang = KhachHang::find($req->id);
        $thongTinNhanVien = NhanVien::where('id', $req->nhan_vien_id)->get();
        $thongTinKhachHang = KhachHang::where('id', $req->khach_hang_id)->get();
        $hopLe = new ThemRequest;
        $thamDinh = Validator::make($req->all(), $hopLe->rules(), $hopLe->messages());
        $thongBaoLoi = $thamDinh->messages()->first();
        if($thamDinh->fails()) {
            return response()->json([
                'thongBao'   => $thongBaoLoi,
                'maPhanHoi'  => 406
            ]);
        }
        if(count($thongTinNhanVien) == 0) {
            return response()->json([
                'thongBao'  => 'Không tìm thấy thông tin nhân viên tương ứng!',
                'maPhanHoi' => 406
            ]);
        }
        if(count($thongTinKhachHang) == 0) {
            return response()->json([
                'thongBao'  => 'Không tìm thấy thông tin khách hàng tương ứng!',
                'maPhanHoi' => 406
            ]);
        }
        $vaiTroThuNgan = Role::findByName('thuNgan', 'ThuNgan');
        $vaiTroQuanTriVien = Role::findByName('quanTriVien', 'QuanTriVien');
        $thongTinHoaDonBan = new HoaDonBan;
        $thongTinHoaDonBan->nhan_vien_id  = $req->nhan_vien_id;
        $thongTinHoaDonBan->khach_hang_id = $req->khach_hang_id;
        $thongTinHoaDonBan->ngay_ban      = Carbon::now();
        $thongTinHoaDonBan->tong_tien     = $req->tong_tien;
        $thongTinHoaDonBan->diem          = $req->diem;
        $thongTinHoaDonBan->ghi_chu       = $req->ghi_chu;
        $thongTinHoaDonBan->save();
        $thongTinHoaDonBan->assignRole($vaiTroThuNgan->name);
        $thongTinHoaDonBan->assignRole($vaiTroQuanTriVien->name);
        $thongTinHoaDonBan->givePermissionTo($vaiTroThuNgan);
        $thongTinHoaDonBan->givePermissionTo($vaiTroQuanTriVien);
        return response()->json([
            'thongBao'  => 'Cập nhật hóa đơn bán thành công!',
            'maPhanHoi' => 200,
            'duLieu'    => $thongTinHoaDonBan
        ]);
    }
}
