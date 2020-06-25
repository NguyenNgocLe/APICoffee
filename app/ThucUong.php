<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ThucUong extends Model
{
    use SoftDeletes;
    protected $table = 'thuc_uong';
    protected $hidden = ['created_at', 'updated_at'];

    public function LoaiThucUong()
    {
        return $this->belongsTo('App\LoaiThucUong');
    }

    public function danhSachHoaDonBan()
    {
        return $this->belongsToMany('App\HoaDonBan', 'chi_tiet_hoa_don_ban');
    }
}
