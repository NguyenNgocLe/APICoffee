<?php

namespace App\Helpers;
use App\LoaiNhanVien;

class FitRoles
{
    public static function getRoleName($user)
    {
        if(isset($user->loai_nhan_vien_id)) {
            $danhSachLoaiNhanVien = LoaiNhanVien::get();
            foreach($danhSachLoaiNhanVien as $loaiNhanVien) {
                if($loaiNhanVien->id === $user->loai_nhan_vien_id) {
                    return $loaiNhanVien->ten_loai;
                }
            }
        }
        return 'Khách hàng';
    }

    public static function isRole($user, $name) {
        return FitRoles::getRoleName($user) === $name;
    }

    public static function isRoles($user, $names) {
        //var_dump(!empty($user->loai_nhan_vien_id));
        // var_dump($user->loai_nhan_vien_id);
        $nameArrays = explode('|', $names);
        foreach($nameArrays as $name) {
            if(FitRoles::getRoleName($user) === $name) {
                return true;                
            }
        }
        return false;
    }

    // public static function expectionHandler($user, $name) {
    //     if() {

    //     } else {
    //         return response()->json([
    //             'thongBao'  => 'Bạn không có quyền thực hiện chức năng này!',
    //             'maPhanHoi' => 403
    //         ]);
    //     }
    // }
}
