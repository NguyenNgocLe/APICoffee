<?php

namespace App\Helpers;

use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;

class UploadFile
{
    public static function taiAnh($anh, $chuoi)
    {
        $tenAnh = $chuoi . '-' . md5(date('Y-M-D H:i:s')) . '.' . $anh->extension();
        $hinh = Image::make($anh);
        $luuHinh = Storage::disk('public');

        $hinh->orientate()->encode();
        $luuHinh->put($chuoi . '/original/' . $tenAnh, $hinh);

        $anhTrungBinh = $hinh->resize(300, 300)->orientate()->encode();
        $luuHinh->put($chuoi . '/medium/' . $tenAnh, $anhTrungBinh);

        $anhNho = $hinh->resize(100, 100)->orientate()->encode();
        $luuHinh->put($chuoi . '/thumb/' . $tenAnh, $anhNho);

        return $tenAnh;
    }

    public static function doiTenAnh($anh, $chuoiThuNhat, $chuoiThuHai = null, $tenAnh = null)
    {
        $ten = (!empty($tenAnh) ? $tenAnh : $anh->getClientOriginalName());
        $tamAnh = Image::make($anh)->orientate()->encode();
        if(!empty($chuoiThuHai))
        {
            Storage::disk('public')->put($chuoiThuNhat . '/' . $chuoiThuHai . '/' . $ten, $tamAnh);
        }
        else
        {
            Storage::disk('public')->put($chuoiThuNhat . '/' . $chuoiThuHai);
        }
        return $ten;
    }

    public static function xoaAnh($anh, $chuoi)
    {
        $duongDanGoc = $chuoi . '/original/' . $anh;
        $duongDanAnhTrungBinh = $chuoi . '/medium/' . $anh;
        $duongDanAnhNho = $chuoi . '/thumb/' . $anh;
        if(file_exists($duongDanGoc) && file_exists($duongDanAnhTrungBinh) && file_exists($duongDanAnhNho))
        {
            Storage::disk('public')->delete($duongDanGoc);
            Storage::disk('public')->delete($duongDanAnhTrungBinh);
            Storage::disk('public')->delete($duongDanAnhNho);
        }
    }

    public static function xoaNhieuAnh($anh, $duongDanThuNhat, $duongDanThuHai)
    {
        $duongDan = $duongDanThuNhat . '/' . $duongDanThuHai . '/' .$anh;
        if(file_exists($duongDan))
        Storage::disk('public')->delete($duongDan);
    }
}




