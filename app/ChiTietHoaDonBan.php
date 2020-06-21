<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChiTietHoaDonBan extends Model
{
    protected $table = 'chi_tiet_hoa_don_ban';

    public function HoaDonBan()
    {
        return $this->belongsTo('App\HoaDonBan', 'hoa_don_ban_id', 'id');
    }

    public function ThucUong()
    {
        return $this->hasMany('App\ThucUong', 'thuc_uong_id', 'id');
    }
}
