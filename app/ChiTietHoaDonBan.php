<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ChiTietHoaDonBan extends Model
{
    use SoftDeletes;
    protected $table = 'chi_tiet_hoa_don_ban';
    protected $hidden = ['created_at', 'updated_at'];

    public function HoaDonBan()
    {
        return $this->belongsTo('App\HoaDonBan');
    }
}