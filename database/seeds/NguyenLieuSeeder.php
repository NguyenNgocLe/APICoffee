<?php

use Illuminate\Database\Seeder;
use App\NguyenLieu;

class NguyenLieuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        NguyenLieu::firstOrCreate([
            'ten_nguyen_lieu' => 'Cafe đen',
            'don_gia'         => 80000,
            'don_vi_tinh'     => 'Bịt',
            'so_luong_ton'    => 1,
            'xoa'             => 0,
            'ghi_chu'         => 'Cafe xịn lắm',
        ]);

        NguyenLieu::firstOrCreate([
            'ten_nguyen_lieu' => 'Cafe bột',
            'don_gia'         => 110000,
            'don_vi_tinh'     => 'Bịt',
            'so_luong_ton'    => 3,
            'xoa'             => 0,
            'ghi_chu'         => 'Cafe vina bột',
        ]);

        NguyenLieu::firstOrCreate([
            'ten_nguyen_lieu' => 'Đường',
            'don_gia'         => 20000,
            'don_vi_tinh'     => 'Kg',
            'so_luong_ton'    => 0,
            'xoa'             => 0,
            'ghi_chu'         => 'Đường bao ngọt',
        ]);

        NguyenLieu::firstOrCreate([
            'ten_nguyen_lieu' => 'Đá',
            'don_gia'         => 1000,
            'don_vi_tinh'     => 'Kg',
            'so_luong_ton'    => 0,
            'xoa'             => 0,
            'ghi_chu'         => 'Đá mi',
        ]);

        NguyenLieu::firstOrCreate([
            'ten_nguyen_lieu' => 'Sữa đặc có đường',
            'don_gia'         => 18000,
            'don_vi_tinh'     => 'Lon',
            'so_luong_ton'    => 1,
            'xoa'             => 0,
            'ghi_chu'         => 'Sữa ông Thọ',
        ]);

        NguyenLieu::firstOrCreate([
            'ten_nguyen_lieu' => 'Sữa tươi không đường',
            'don_gia'         => 16000,
            'don_vi_tinh'     => 'Bịt',
            'so_luong_ton'    => 3,
            'xoa'             => 0,
            'ghi_chu'         => 'Sữa tươi vinamilk',
        ]);

        NguyenLieu::firstOrCreate([
            'ten_nguyen_lieu' => 'Vani',
            'don_gia'         => 7000,
            'don_vi_tinh'     => 'Ống',
            'so_luong_ton'    => 2,
            'xoa'             => 1,
            'ghi_chu'         => 'Mặt hàng này đã không còn kinh doanh!',
        ]);

        NguyenLieu::firstOrCreate([
            'ten_nguyen_lieu' => 'Bột Onemix',
            'don_gia'         => 140000,
            'don_vi_tinh'     => 'Kg',
            'so_luong_ton'    => 0,
            'xoa'             => 0,
            'ghi_chu'         => 'Bột Mix Smoothie không hương',
        ]);

        NguyenLieu::firstOrCreate([
            'ten_nguyen_lieu' => 'Bột Cacao',
            'don_gia'         => 40000,
            'don_vi_tinh'     => 'Kg',
            'so_luong_ton'    => 5,
            'xoa'             => 0,
            'ghi_chu'         => 'Bột Cacao nguyên chất',
        ]);

        NguyenLieu::firstOrCreate([
            'ten_nguyen_lieu' => 'Bột Socola',
            'don_gia'         => 98000,
            'don_vi_tinh'     => 'Kg',
            'so_luong_ton'    => 1,
            'xoa'             => 1,
            'ghi_chu'         => 'Mặt hàng này đã không còn kinh doanh!',
        ]);

        NguyenLieu::firstOrCreate([
            'ten_nguyen_lieu' => 'Sốt Caramel',
            'don_gia'         => 59000,
            'don_vi_tinh'     => 'Kg',
            'so_luong_ton'    => 0,
            'xoa'             => 0,
            'ghi_chu'         => 'Sốt Caramel',
        ]);
    }
}
