<?php
namespace App\Helpers;
use App\LoaiNhanVien;

class SgRoles
{
    public static function getRoleName($user)
    {
        if(isset($user->loai_nhan_vien_id)) {
            $danhSachLoaiNhanVien = LoaiNhanVien::get();
            foreach($danhSachLoaiNhanVien as $loaiNhanVien) {
                if($user->loai_nhan_vien_id === $loaiNhanVien->id) {
                    return $loaiNhanVien->ten;
                }
            }
        }
        return 'khách hàng';
    }

    public static function isRole($user, $name) {
        return SgRoles::getRoleName($user) === $name;
    }

    public static function isRoles($user, $names) {
        $nameArrays = explode('|', $names);
        foreach($nameArrays as $name) {
            if(SgRoles::getRoleName($user) === $name) {
                return true;                
            }
        }
        return false;
    }
}
?>