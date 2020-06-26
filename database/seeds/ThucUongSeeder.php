<?php

use Illuminate\Database\Seeder;
use App\ThucUong;
use App\LoaiThucUong;

class ThucUongSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ThucUong::firstOrCreate([
            'loai_thuc_uong_id' => 1,
            'ten_thuc_uong'     => 'Americano',
            'hinh_anh'          => 'americano.jpg',
            'don_gia'           => 39.000,
            'xoa'               => 0,
        ]);

        ThucUong::firstOrCreate([
            'loai_thuc_uong_id' => 1,
            'ten_thuc_uong'     => 'café espresso',
            'hinh_anh'          => 'espresso.jpg',
            'don_gia'           => 35.000,
            'xoa'               => 0,
        ]);

        ThucUong::firstOrCreate([
            'loai_thuc_uong_id' => 1,
            'ten_thuc_uong'     => 'Espresso với sữa',
            'hinh_anh'          => 'espresso_voi_sua.jpg',
            'don_gia'           => 39.000,
            'xoa'               => 0,
            'ghi_chu'           => 'Sản phẩm còn ít nguyên liệu cafe'
        ]);

        ThucUong::firstOrCreate([
            'loai_thuc_uong_id' => 1,
            'ten_thuc_uong'     => 'COLD BREW truyền thống',
            'hinh_anh'          => 'coldbrew.jpg',
            'don_gia'           => 35.000,
            'xoa'               => 0,
        ]);

        ThucUong::firstOrCreate([
            'loai_thuc_uong_id' => 1,
            'ten_thuc_uong'     => 'MOCHA',
            'hinh_anh'          => 'mocha.jpg',
            'don_gia'           => 33.000,
            'xoa'               => 0,
        ]);

        ThucUong::firstOrCreate([
            'loai_thuc_uong_id' => 1,
            'ten_thuc_uong'     => 'Bạc sỉu',
            'hinh_anh'          => 'bacsiu.jpg',
            'don_gia'           => 35.000,
            'xoa'               => 0,
            'ghi_chu'           => 'Sản phẩm có ít nguyên liệu',
        ]);

        ThucUong::firstOrCreate([
            'loai_thuc_uong_id' => 1,
            'ten_thuc_uong'     => 'Cappuchino',
            'hinh_anh'          => 'cappuchino.jpg',
            'don_gia'           => 47.000,
            'xoa'               => 0,
        ]);

        ThucUong::firstOrCreate([
            'loai_thuc_uong_id' => 1,
            'ten_thuc_uong'     => 'LATTE',
            'hinh_anh'          => 'latte.jpg',
            'don_gia'           => 45.000,
            'xoa'               => 0,
        ]);

        ThucUong::firstOrCreate([
            'loai_thuc_uong_id' => 1,
            'ten_thuc_uong'     => 'Milano',
            'hinh_anh'          => 'milano.jpg',
            'don_gia'           => 55.000,
            'xoa'               => 0,
        ]);

        ThucUong::firstOrCreate([
            'loai_thuc_uong_id' => 1,
            'ten_thuc_uong'     => 'Cafe sữa',
            'hinh_anh'          => 'cafesua.jpg',
            'don_gia'           => 29.000,
            'xoa'               => 0,
            'ghi_chu'           => 'Sản phẩm còn ít nguyên liệu đường',
        ]);

        ThucUong::firstOrCreate([
            'loai_thuc_uong_id' => 1,
            'ten_thuc_uong'     => 'COCONUT LATTE',
            'hinh_anh'          => 'Coconutlatte.jpg',
            'don_gia'           => 38.000,
            'xoa'               => 0,
        ]);

        ThucUong::firstOrCreate([
            'loai_thuc_uong_id' => 1,
            'ten_thuc_uong'     => 'ALMOND LATTE',
            'hinh_anh'          => 'Almondlatte.jpg',
            'don_gia'           => 45.000,
            'xoa'               => 0,
        ]);

        ThucUong::firstOrCreate([
            'loai_thuc_uong_id' => 1,
            'ten_thuc_uong'     => 'ALMOND LATTE',
            'hinh_anh'          => 'Almondlatte.jpg',
            'don_gia'           => 45.000,
            'xoa'               => 0,
        ]);

        ThucUong::firstOrCreate([
            'loai_thuc_uong_id' => 1,
            'ten_thuc_uong'     => 'Cafe nóng',
            'hinh_anh'          => 'Almondlatte.jpg',
            'don_gia'           => 12.000,
            'xoa'               => 1,
            'ghi_chu'           => 'Sản phẩm này rẽ quá bán không lời!',
        ]);

        ThucUong::firstOrCreate([
            'loai_thuc_uong_id' => 1,
            'ten_thuc_uong'     => 'CARAMEL MACCHIATO',
            'hinh_anh'          => 'caramelmacchiato.jpg',
            'don_gia'           => 55.000,
            'xoa'               => 1,
            'ghi_chu'           => 'Sản phẩm này mắc, khách ít dùng!',
        ]);
    }
}
