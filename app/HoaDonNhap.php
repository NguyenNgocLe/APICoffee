<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HoaDonNhap extends Model
{
    protected $table = 'hoa_don_nhap';

    public function ChiTietHoaDonNhap()
    {
        return $this->hasMany('App\ChiTietHoaDonNhap', 'hoa_don_nhap_id', 'id');
    }
}
