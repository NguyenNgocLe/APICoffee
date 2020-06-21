<?php

use Illuminate\Database\Seeder;
use App\LoaiThucUong;

class LoaiThucUongSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        LoaiThucUong::firstOrCreate([
            'ten_loai_thuc_uong' => 'Coffee',
            'xoa'                => 0,
        ]);

        LoaiThucUong::firstOrCreate([
            'ten_loai_thuc_uong' => 'Trà sữa',
            'xoa'                => 0,
        ]);

        LoaiThucUong::firstOrCreate([
            'ten_loai_thuc_uong' => 'Nước ngọt',
            'xoa'                => 0,
        ]);
        
        LoaiThucUong::firstOrCreate([
            'ten_loai_thuc_uong' => 'Trà',
            'xoa'                => 1,
            'ghi_chu'            => 'Sản phẩm khách hàng không ưa thích!'
        ]);
    }
}
