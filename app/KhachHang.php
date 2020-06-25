<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authentic;
use Tymon\JWTAuth\Contracts\JWTSubject;

class KhachHang extends Authentic implements JWTSubject
{
    use SoftDeletes;
    protected $table = 'khach_hang';
    protected $hidden = ['mat_khau', 'otp', 'created_at', 'updated_at'];

    public function LichSuDiem()
    {
        return $this->hasOne('App\LichSuDiem');
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

    public function getFullImgAttribute() {
        if ($this->anh_dai_dien == null) {
            return [];
        }
        return [
            'original'  => request()->getSchemeAndHttpHost(). '/khach-hang/original/'. $this->anh_dai_dien,
            'medium'    => request()->getSchemeAndHttpHost(). '/khach-hang/medium/'. $this->anh_dai_dien,
            'thumb'     => request()->getSchemeAndHttpHost(). '/khach-hang/thumb/'. $this->anh_dai_dien,
        ];
    }
}
