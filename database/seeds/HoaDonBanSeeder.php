<?php

use Illuminate\Database\Seeder;
use App\HoaDonBan;

class HoaDonBanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        HoaDonBan::firstOrCreate([
            'nhan_vien_id'  => 2,
            'khach_hang_id' => 1,
            'ngay_ban'      => '2020-01-01',
            'tong_tien'     => 45000,
            'diem'          => 10,
            'ghi_chu'       => 'Khách hàng không dùng điểm tích lũy!',
        ]);

        HoaDonBan::firstOrCreate([
            'nhan_vien_id'  => 2,
            'khach_hang_id' => 3,
            'ngay_ban'      => '2020-02-01',
            'tong_tien'     => 74000,
            'diem'          => 25,
            'ghi_chu'       => 'Khách hàng không dùng điểm tích lũy!',
        ]);

        HoaDonBan::firstOrCreate([
            'nhan_vien_id'  => 2,
            'khach_hang_id' => 5,
            'ngay_ban'      => '2020-03-01',
            'tong_tien'     => 74000,
            'diem'          => 25,
            'ghi_chu'       => 'Khách hàng không dùng điểm tích lũy!',
        ]);

        HoaDonBan::firstOrCreate([
            'nhan_vien_id'  => 2,
            'khach_hang_id' => 6,
            'ngay_ban'      => '2020-03-04',
            'tong_tien'     => 74000,
            'diem'          => 25,
            'ghi_chu'       => 'Khách hàng không dùng điểm tích lũy!',
        ]);

        HoaDonBan::firstOrCreate([
            'nhan_vien_id'  => 2,
            'khach_hang_id' => 7,
            'ngay_ban'      => '2020-04-04',
            'tong_tien'     => 45.000,
            'diem'          => 20,
            'ghi_chu'       => 'Khách hàng dùng điểm tích lũy!',
        ]);

        HoaDonBan::firstOrCreate([
            'nhan_vien_id'  => 2,
            'khach_hang_id' => 8,
            'ngay_ban'      => '2020-04-06',
            'tong_tien'     => 127000,
            'diem'          => 40,
            'ghi_chu'       => 'Khách hàng không dùng điểm tích lũy!',
        ]);

        HoaDonBan::firstOrCreate([
            'nhan_vien_id'  => 2,
            'khach_hang_id' => 9,
            'ngay_ban'      => '2020-05-01',
            'tong_tien'     => 29000,
            'diem'          => 1,
            'ghi_chu'       => 'Khách hàng dùng điểm tích lũy!',
        ]);
    }
}
