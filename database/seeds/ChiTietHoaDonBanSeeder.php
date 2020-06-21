<?php

use Illuminate\Database\Seeder;
use App\ChiTietHoaDonBan;

class ChiTietHoaDonBanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ChiTietHoaDonBan::firstOrCreate([
            'hoa_don_ban_id' => 1,
            'thuc_uong_id'   => 8,
            'so_luong'       => 1,
            'don_gia'        => 45000,
        ]);

        ChiTietHoaDonBan::firstOrCreate([
            'hoa_don_ban_id' => 2,
            'thuc_uong_id'   => 1,
            'so_luong'       => 1,
            'don_gia'        => 35000,
        ]);

        ChiTietHoaDonBan::firstOrCreate([
            'hoa_don_ban_id' => 2,
            'thuc_uong_id'   => 3,
            'so_luong'       => 1,
            'don_gia'        => 39000,
        ]);

        ChiTietHoaDonBan::firstOrCreate([
            'hoa_don_ban_id' => 3,
            'thuc_uong_id'   => 4,
            'so_luong'       => 1,
            'don_gia'        => 35000,
        ]);

        ChiTietHoaDonBan::firstOrCreate([
            'hoa_don_ban_id' => 3,
            'thuc_uong_id'   => 1,
            'so_luong'       => 1,
            'don_gia'        => 39000,
        ]);

        ChiTietHoaDonBan::firstOrCreate([
            'hoa_don_ban_id' => 6,
            'thuc_uong_id'   => 10,
            'so_luong'       => 1,
            'don_gia'        => 29000,
        ]);

        ChiTietHoaDonBan::firstOrCreate([
            'hoa_don_ban_id' => 5,
            'thuc_uong_id'   => 8,
            'so_luong'       => 8,
            'don_gia'        => 45000,
        ]);

        ChiTietHoaDonBan::firstOrCreate([
            'hoa_don_ban_id' => 5,
            'thuc_uong_id'   => 7,
            'so_luong'       => 1,
            'don_gia'        => 47000,
        ]);

        ChiTietHoaDonBan::firstOrCreate([
            'hoa_don_ban_id' => 5,
            'thuc_uong_id'   => 2,
            'so_luong'       => 1,
            'don_gia'        => 35000,
        ]);
    }
}
