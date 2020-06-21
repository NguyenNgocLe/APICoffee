<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HoaDonBan extends Model
{
    protected $table = 'hoa_don_ban';

    public function ChiTietHoaDonBan()
    {
        return $this->hasMany('App\ChiTietHoaDonBan', 'hoa_don_ban_id', 'local_key');
    }

    public function KhachHang()
    {
        return $this->belongsTo('App\KhachHang', 'khach_hang_id', 'id');
    }

    public function comments()
    {
        return $this->hasMany('App\Comment', 'foreign_key', 'local_key');
    }

    public function NhanVien()
    {
        return $this->belongsTo('App\NhanVien', 'nhan_vien_id', 'id');
    }
}
