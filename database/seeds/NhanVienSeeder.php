<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\NhanVien;

class NhanVienSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        NhanVien::firstOrCreate([
            'loai_nhan_vien_id' => 1,
            'ten_dang_nhap'     => 'admin',
            'mat_khau'          => Hash::make('admin'),
        ]);

        NhanVien::firstOrCreate([
            'loai_nhan_vien_id' => 2,
            'ten_dang_nhap'     => 'thungan',
            'mat_khau'          => Hash::make('thungan'),
        ]);

        NhanVien::firstOrCreate([
            'loai_nhan_vien_id' => 3,
            'ten_dang_nhap'     => 'phache',
            'mat_khau'          => Hash::make('phache'),
        ]);

        NhanVien::firstOrCreate([
            'loai_nhan_vien_id' => 4,
            'ten_dang_nhap'     => 'phucvu',
            'mat_khau'          => Hash::make('phucvu'),
        ]);

        NhanVien::firstOrCreate([
            'loai_nhan_vien_id' => 5,
            'ten_dang_nhap'     => 'kho',
            'mat_khau'          => Hash::make('kho'),
        ]);
    }
}
