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
            'ten'             => 'Cafe đen',
            'don_vi_tinh'     => 'Bịt',
            'so_luong_ton'    => 1,
            'don_gia'         => 80000,
            'ghi_chu'         => 'Cafe xịn lắm',
        ]);

        NguyenLieu::firstOrCreate([
            'ten'             => 'Cafe bột',
            'don_vi_tinh'     => 'Bịt',
            'so_luong_ton'    => 3,
            'don_gia'         => 110000,
            'ghi_chu'         => 'Cafe vina bột',
        ]);

        NguyenLieu::firstOrCreate([
            'ten'             => 'Đường',
            'don_gia'         => 20000,
            'don_vi_tinh'     => 'Kg',
            'so_luong_ton'    => 0,
            'ghi_chu'         => 'Đường bao ngọt',
        ]);

        NguyenLieu::firstOrCreate([
            'ten'             => 'Đá',
            'don_vi_tinh'     => 'Kg',
            'so_luong_ton'    => 0,
            'don_gia'         => 1000,
            'ghi_chu'         => 'Đá mi',
        ]);

        NguyenLieu::firstOrCreate([
            'ten'             => 'Sữa đặc có đường',
            'don_vi_tinh'     => 'Lon',
            'so_luong_ton'    => 1,
            'don_gia'         => 18000,
            'ghi_chu'         => 'Sữa ông Thọ',
        ]);

        NguyenLieu::firstOrCreate([
            'ten'             => 'Sữa tươi không đường',
            'don_vi_tinh'     => 'Bịt',
            'so_luong_ton'    => 3,
            'don_gia'         => 16000,
            'ghi_chu'         => 'Sữa tươi vinamilk',
        ]);

        NguyenLieu::firstOrCreate([
            'ten'             => 'Vani',
            'don_vi_tinh'     => 'Ống',
            'so_luong_ton'    => 2,
            'don_gia'         => 7000,
            'ghi_chu'         => 'Mặt hàng này đã không c™òn kinh doanh!',
        ]);

        NguyenLieu::firstOrCreate([
            'ten'             => 'Bột Onemix',
            'don_vi_tinh'     => 'Kg',
            'so_luong_ton'    => 0,
            'don_gia'         => 140000,
            'ghi_chu'         => 'Bột Mix Smoothie không hương',
        ]);

        NguyenLieu::firstOrCreate([
            'ten'             => 'Bột Cacao',
            'don_vi_tinh'     => 'Kg',
            'so_luong_ton'    => 5,
            'don_gia'         => 40000,
            'ghi_chu'         => 'Bột Cacao nguyên chất',
        ]);

        NguyenLieu::firstOrCreate([
            'ten'             => 'Bột Socola',
            'don_vi_tinh'     => 'Kg',
            'so_luong_ton'    => 1,
            'don_gia'         => 98000,
            'ghi_chu'         => 'Mặt hàng này đã không còn kinh doanh!',
        ]);

        NguyenLieu::firstOrCreate([
            'ten'             => 'Sốt Caramel',
            'don_gia'         => 59000,
            'don_vi_tinh'     => 'Kg',
            'so_luong_ton'    => 0,
            'ghi_chu'         => 'Sốt Caramel',
        ]);
    }
}
