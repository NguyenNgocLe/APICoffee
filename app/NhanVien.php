<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authentic;
use Tymon\JWTAuth\Contracts\JWTSubject;

class NhanVien extends Authentic implements JWTSubject
{
    use SoftDeletes;
    protected $table = 'nhan_vien';
    protected $hidden = ['mat_khau', 'otp', 'created_at', 'updated_at'];

    public function LoaiNhanVien()
    {
        return $this->belongsTo('App\LoaiNhanVien');
    }

    public function DanhSachHoaDonNhap()
    {
        return $this->hasMany('App\HoaDonNhap');
    }

    public function DanhSachHoaDonBan()
    {
        return $this->hasMany('App\HoaDonBan');
    }

    public function getJWTIdentifier() {
        return $this->getKey();
    }

    public function getJWTCustomClaims() {
        return [];
    }

    public function getPasswordAttribute() {
        return $this->mat_khau;
    }
}
