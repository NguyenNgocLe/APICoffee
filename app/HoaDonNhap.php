<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class HoaDonNhap extends Model
{
    use SoftDeletes;
    protected $table = 'hoa_don_nhap';
    protected $hidden = ['created_at', 'updated_at'];

    public function nhanVien()
    {
        return $this->belongsTo('App\NhanVien');
    }

    public function danhSachNguyenLieu()
    {
        return $this->hasMany('App\NguyenLieu', 'chi_tiet_hoa_don_nhap');
    }
}
