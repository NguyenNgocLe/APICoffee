<?php

use Illuminate\Database\Seeder;
use App\LoaiNhanVien;

class LoaiNhanVienSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        LoaiNhanVien::firstOrCreate([
            'ten'      => 'Quản trị viên',
            'ghi_chu'  => 'Quản trị quán coffee'
        ]);

        LoaiNhanVien::firstOrCreate([
            'ten'      => 'Nhân viên thu ngân',
            'ghi_chu'  => 'Nhân viên đứng tại quầy tính tiền'
        ]);

        LoaiNhanVien::firstOrCreate([
            'ten'      => 'Nhân viên pha chế',
            'ghi_chu'  => 'Nhân viên chế biến thức uống'
        ]);

        LoaiNhanVien::firstOrCreate([
            'ten'      => 'Nhân viên phục vụ',
            'ghi_chu'  => ''
        ]);

        LoaiNhanVien::firstOrCreate([
            'ten'      => 'Nhân viên kho',
            'ghi_chu'  => 'Nhân viên nhập nguyên liệu'
        ]);

        LoaiNhanVien::firstOrCreate([
            'ten'      => 'Bảo vệ',
            'ghi_chu'  => 'Không có tiền mướn bảo vệ!'
        ]);

        LoaiNhanVien::firstOrCreate([
            'ten'      => 'Nhân viên kỹ thuật',
            'ghi_chu'  => 'Không có tiền mướn nhân viên kỹ thuật!'
        ]);
    }
}
