<?php

namespace App;

use Symfony\Component\HttpFoundation\Request;
use Spatie\Permission\Traits\HasRoles;
use Spatie\Permission\Traits\HasPermissions;
use Illuminate\Foundation\Auth\User as Authentic;
use Tymon\JWTAuth\Contracts\JWTSubject;

class LoaiNhanVien extends Authentic implements JWTSubject
{
    use HasRoles, HasPermissions;
    protected $table = 'loai_nhan_vien';

    public function NhanVien()
    {
        return $this->hasMany('App\NhanVien', 'loai_nhan_vien_id', 'id');
    }

    public function getJWTIdentifier() {
        return $this->getKey();
    }

    public function getJWTCustomClaims() {
        return [];
    }
}
