<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class HoaDonBan extends Model
{
    use SoftDeletes;
    protected $table = 'hoa_don_ban';
    protected $hidden = ['created_at', 'updated_at'];

    public function NhanVien()
    {
        return $this->belongsTo('App\NhanVien');
    }
    
    public function KhachHang()
    {
        return $this->belongsTo('App\KhachHang');
    }

    public function danhSachThucUong()
    {
        return $this->belongsToMany('App\ThucUong', 'chi_tiet_hoa_don_ban');
    }
}
