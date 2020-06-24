<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\QuanTriVien;

class QuanTriVienSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        QuanTriVien::firstOrCreate([
            'ten_dang_nhap'     => 'admin',
            'mat_khau'          => Hash::make('admin'),
        ]);
    }
}
