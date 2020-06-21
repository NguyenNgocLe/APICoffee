<?php

use Illuminate\Database\Seeder;
use App\HoaDonNhap;

class HoaDonNhapSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        HoaDonNhap::firstOrCreate([
            'nhan_vien_id' => 5,
            'ngay_nhap'     => '2019-08-02',
            'tong_tien'    => 3200000,
            'xoa'          => 0,
            'ghi_chu'      => '',
        ]);

        HoaDonNhap::firstOrCreate([
            'nhan_vien_id' => 5,
            'ngay_nhap'     => '2019-08-04',
            'tong_tien'    => 3600000,
            'xoa'          => 0,
            'ghi_chu'      => '',
        ]);

        HoaDonNhap::firstOrCreate([
            'nhan_vien_id' => 5,
            'ngay_nhap'     => '2019-06-08',
            'tong_tien'    => 2200000,
            'xoa'          => 0,
            'ghi_chu'      => '',
        ]);
    }
}
