<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NguyenLieu extends Model
{
    protected $table = 'nguyen_lieu';

    public function ChiTietHoaDonNhap()
    {
        return $this->belongsTo('App\ChiTietHoaDonNhap', 'nguyen_lieu_id', 'id');
    }
}
