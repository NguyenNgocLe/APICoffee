<?php

namespace App;

use Symfony\Component\HttpFoundation\Request;
use Spatie\Permission\Traits\HasRoles;
use Spatie\Permission\Traits\HasPermissions;
use Illuminate\Foundation\Auth\User as Authentic;
use Tymon\JWTAuth\Contracts\JWTSubject;

class KhachHang extends Authentic implements JWTSubject
{
    use HasRoles, HasPermissions;
    protected $table = 'khach_hang';
    protected $hidden = ['mat_khau', 'roles', 'permissions'];
    protected $appends = [
        'full_img'
    ];
    protected $fillable = [
        'mat_khau'
    ];
    public function getJWTIdentifier() {
        return $this->getKey();
    }

    public function getJWTCustomClaims() {
        return [];
    }

    public function LichSuDiem()
    {
        return $this->hasOne('App\LichSuDiem', 'khach_hang_id', 'id');
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
