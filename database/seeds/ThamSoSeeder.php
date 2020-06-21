<?php

use Illuminate\Database\Seeder;
use App\ThamSo;

class ThamSoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ThamSo::firstOrCreate([
            'ten_tham_so' => 'PI',
            'gia_tri'     => 3.14
        ]);

        ThamSo::firstOrCreate([
            'ten_tham_so' => 'HE_SO_TICH_LUY',
            'gia_tri'     => 0.01
        ]);
    }
}
