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
            'ten'     => 'Coffee',
        ]);

        LoaiThucUong::firstOrCreate([
            'ten'     => 'Trà sữa',
        ]);

        LoaiThucUong::firstOrCreate([
            'ten'     => 'Nước ngọt',
        ]);
        
        LoaiThucUong::firstOrCreate([
            'ten'     => 'Trà',
            'ghi_chu' => 'Sản phẩm khách hàng không ưa thích!'
        ]);
    }
}
