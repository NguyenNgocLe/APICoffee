<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            ThamSoSeeder::class,
            NguyenLieuSeeder::class,
            LoaiThucUongSeeder::class,
            ThucUongSeeder::class,
            LoaiNhanVienSeeder::class,
            NhanVienSeeder::class,
            KhachHangSeeder::class,
            LichSuDiemSeeder::class,
            HoaDonBanSeeder::class,
            ChiTietHoaDonBanSeeder::class,
            HoaDonNhapSeeder::class,
            ChiTietHoaDonNhapSeeder::class,
        ]);
    }
}
