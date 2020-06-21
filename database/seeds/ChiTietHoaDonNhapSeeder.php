<?php

use Illuminate\Database\Seeder;
use App\ChiTietHoaDonNhap;

class ChiTietHoaDonNhapSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ChiTietHoaDonNhap::firstOrCreate([
            'hoa_don_nhap_id' => 1,
            'nguyen_lieu_id'  => 2,
            'so_luong'        => 5,
            'gia'             => 55000,
        ]);

        ChiTietHoaDonNhap::firstOrCreate([
            'hoa_don_nhap_id' => 1,
            'nguyen_lieu_id'  => 3,
            'so_luong'        => 3,
            'gia'             => 60000,
        ]);

        ChiTietHoaDonNhap::firstOrCreate([
            'hoa_don_nhap_id' => 1,
            'nguyen_lieu_id'  => 4,
            'so_luong'        => 15,
            'gia'             => 15000,
        ]);

        ChiTietHoaDonNhap::firstOrCreate([
            'hoa_don_nhap_id' => 1,
            'nguyen_lieu_id'  => 6,
            'so_luong'        => 2,
            'gia'             => 192000,
        ]);

        ChiTietHoaDonNhap::firstOrCreate([
            'hoa_don_nhap_id' => 1,
            'nguyen_lieu_id'  => 8,
            'so_luong'        => 1,
            'gia'             => 140000,
        ]);

        ChiTietHoaDonNhap::firstOrCreate([
            'hoa_don_nhap_id' => 1,
            'nguyen_lieu_id'  => 9,
            'so_luong'        => 2,
            'gia'             => 80000,
        ]);

        ChiTietHoaDonNhap::firstOrCreate([
            'hoa_don_nhap_id' => 1,
            'nguyen_lieu_id'  => 10,
            'so_luong'        => 1,
            'gia'             => 98000,
        ]);

        ChiTietHoaDonNhap::firstOrCreate([
            'hoa_don_nhap_id' => 1,
            'nguyen_lieu_id'  => 11,
            'so_luong'        => 1,
            'gia'             => 59000,
        ]);

        ChiTietHoaDonNhap::firstOrCreate([
            'hoa_don_nhap_id' => 1,
            'nguyen_lieu_id'  => 1,
            'so_luong'        => 4,
            'gia'             => 320000,
        ]);

        ChiTietHoaDonNhap::firstOrCreate([
            'hoa_don_nhap_id' => 1,
            'nguyen_lieu_id'  => 5,
            'so_luong'        => 5,
            'gia'             => 90000,
        ]);
    }
}
