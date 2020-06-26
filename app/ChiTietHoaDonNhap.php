<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChiTietHoaDonNhap extends Model
{
    protected $table = 'chi_tiet_hoa_don_nhap';

    public function HoaDonNhap()
    {
        return $this->belongsTo('App\HoaDonNhap', 'hoa_don_nhap_id', 'id');
    }

    public function NguyenLieu()
    {
        return $this->hasMany('App\NguyenLieu', 'nguyen_lieu_id', 'id');
    }
}
