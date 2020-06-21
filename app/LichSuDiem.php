<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LichSuDiem extends Model
{
    protected $table = 'lich_su_diem';

    public function KhachHang()
    {
        return $this->belongsTo('App\LichSuDiem');
    }
}
