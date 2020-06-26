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
            'ten_loai' => 'Quản trị viên',
            'xoa'      => 0,
            'ghi_chu'  => 'Quản trị quán coffee'
        ]);

        LoaiNhanVien::firstOrCreate([
            'ten_loai' => 'Nhân viên thu ngân',
            'xoa'      => 0,
            'ghi_chu'  => 'Nhân viên đứng tại quầy tính tiền'
        ]);

        LoaiNhanVien::firstOrCreate([
            'ten_loai' => 'Nhân viên pha chế',
            'xoa'      => 0,
            'ghi_chu'  => 'Nhân viên chế biến thức uống'
        ]);

        LoaiNhanVien::firstOrCreate([
            'ten_loai' => 'Nhân viên phục vụ',
            'xoa'      => 0,
            'ghi_chu'  => ''
        ]);

        LoaiNhanVien::firstOrCreate([
            'ten_loai' => 'Nhân viên kho',
            'xoa'      => 0,
            'ghi_chu'  => 'Nhân viên nhập nguyên liệu'
        ]);

        LoaiNhanVien::firstOrCreate([
            'ten_loai' => 'Shipper',
            'xoa'      => 0,
            'ghi_chu'  => 'Nhân viên vận chuyển thức uống'
        ]);

        LoaiNhanVien::firstOrCreate([
            'ten_loai' => 'Bảo vệ',
            'xoa'      => 1,
            'ghi_chu'  => 'Không có tiền mướn bảo vệ!'
        ]);

        LoaiNhanVien::firstOrCreate([
            'ten_loai' => 'Nhân viên kỹ thuật',
            'xoa'      => 1,
            'ghi_chu'  => 'Không có tiền mướn nhân viên kỹ thuật!'
        ]);
    }
}
