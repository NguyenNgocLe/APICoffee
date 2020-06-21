<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\KhachHang;

class KhachHangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        KhachHang::firstOrCreate([
            'ten_dang_nhap' => 'NgocLe',
            'mat_khau'      => Hash::make('ngocle'),
        ]);

        KhachHang::firstOrCreate([
            'ten_dang_nhap' => 'MinhTan',
            'mat_khau'      => Hash::make('minhtan'),
        ]);

        KhachHang::firstOrCreate([
            'ten_dang_nhap' => 'DucAnh',
            'mat_khau'      => Hash::make('ducanh'),
        ]);

        KhachHang::firstOrCreate([
            'ten_dang_nhap' => 'ThanhDuy',
            'mat_khau'      => Hash::make('thanhduy'),
        ]);

        KhachHang::firstOrCreate([
            'ten_dang_nhap' => 'VietHan',
            'mat_khau'      => Hash::make('viethan'),
        ]);

        KhachHang::firstOrCreate([
            'ten_dang_nhap' => 'DuyPhuong',
            'mat_khau'      => Hash::make('duyphuong'),
        ]);

        KhachHang::firstOrCreate([
            'ten_dang_nhap' => 'HieuDong',
            'mat_khau'      => Hash::make('hieudong'),
        ]);

        KhachHang::firstOrCreate([
            'ten_dang_nhap' => 'VanTy',
            'mat_khau'      => Hash::make('vanty'),
        ]);

        KhachHang::firstOrCreate([
            'ten_dang_nhap' => 'ThanhMinh',
            'mat_khau'      => Hash::make('thanhminh'),
        ]);

        KhachHang::firstOrCreate([
            'ten_dang_nhap' => 'ThachTai',
            'mat_khau'      => Hash::make('thachtai'),
        ]);

        KhachHang::firstOrCreate([
            'ten_dang_nhap' => 'ThachTai',
            'mat_khau'      => Hash::make('thachtai'),
        ]);

        KhachHang::firstOrCreate([
            'ten_dang_nhap' => 'BichPhuong',
            'mat_khau'      => Hash::make('bichphuong'),
        ]);

        KhachHang::firstOrCreate([
            'ten_dang_nhap' => 'BichDung',
            'mat_khau'      => Hash::make('bichdung'),
        ]);

        KhachHang::firstOrCreate([
            'ten_dang_nhap' => 'DinhSon',
            'mat_khau'      => Hash::make('dinhson'),
        ]);

        KhachHang::firstOrCreate([
            'ten_dang_nhap' => 'HongAn',
            'mat_khau'      => Hash::make('hongan'),
        ]);

        KhachHang::firstOrCreate([
            'ten_dang_nhap' => 'HongTham',
            'mat_khau'      => Hash::make('hongtham'),
        ]);

        KhachHang::firstOrCreate([
            'ten_dang_nhap' => 'VanTot',
            'mat_khau'      => Hash::make('vantot'),
        ]);

        KhachHang::firstOrCreate([
            'ten_dang_nhap' => 'LeNam',
            'mat_khau'      => Hash::make('lenam'),
        ]);

        KhachHang::firstOrCreate([
            'ten_dang_nhap' => 'AnhTuan',
            'mat_khau'      => Hash::make('anhtuan'),
        ]);

        KhachHang::firstOrCreate([
            'ten_dang_nhap' => 'TuanAnh',
            'mat_khau'      => Hash::make('tuananh'),
        ]);

        KhachHang::firstOrCreate([
            'ten_dang_nhap' => 'PhanLinh',
            'mat_khau'      => Hash::make('phanlinh'),
        ]);

        KhachHang::firstOrCreate([
            'ten_dang_nhap' => 'PhiHung',
            'mat_khau'      => Hash::make('phihung'),
        ]);

        KhachHang::firstOrCreate([
            'ten_dang_nhap' => 'VanHoa',
            'mat_khau'      => Hash::make('vanhoa'),
        ]);

        KhachHang::firstOrCreate([
            'ten_dang_nhap' => 'AiVy',
            'mat_khau'      => Hash::make('aivy'),
        ]);

        KhachHang::firstOrCreate([
            'ten_dang_nhap' => 'ThiLuong',
            'mat_khau'      => Hash::make('thiluong'),
        ]);

        KhachHang::firstOrCreate([
            'ten_dang_nhap' => 'KimPhuong',
            'mat_khau'      => Hash::make('kimphuong'),
        ]);

        KhachHang::firstOrCreate([
            'ten_dang_nhap' => 'ConChanh',
            'mat_khau'      => Hash::make('conchanh'),
        ]);

        KhachHang::firstOrCreate([
            'ten_dang_nhap' => 'HuynhThinh',
            'mat_khau'      => Hash::make('huynhthinh'),
        ]);

        KhachHang::firstOrCreate([
            'ten_dang_nhap' => 'NhatDuy',
            'mat_khau'      => Hash::make('nhatduy'),
        ]);

        KhachHang::firstOrCreate([
            'ten_dang_nhap' => 'ThanhTam',
            'mat_khau'      => Hash::make('thanhtam'),
        ]);

        KhachHang::firstOrCreate([
            'ten_dang_nhap' => 'TrongDat',
            'mat_khau'      => Hash::make('trongdat'),
        ]);

        KhachHang::firstOrCreate([
            'ten_dang_nhap' => 'HoangDat',
            'mat_khau'      => Hash::make('hoangdat'),
        ]);

        KhachHang::firstOrCreate([
            'ten_dang_nhap' => 'VanDat',
            'mat_khau'      => Hash::make('vandat'),
        ]);

        KhachHang::firstOrCreate([
            'ten_dang_nhap' => 'MinhChung',
            'mat_khau'      => Hash::make('minhchung'),
        ]);

        KhachHang::firstOrCreate([
            'ten_dang_nhap' => 'NgocHoang',
            'mat_khau'      => Hash::make('ngochoang'),
        ]);
    }
}
