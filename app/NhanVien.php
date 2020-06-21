<?php

namespace App;

use Symfony\Component\HttpFoundation\Request;
use Spatie\Permission\Traits\HasRoles;
use Spatie\Permission\Traits\HasPermissions;
use Illuminate\Foundation\Auth\User as Authentic;
use Tymon\JWTAuth\Contracts\JWTSubject;

class NhanVien extends Authentic implements JWTSubject
{
    use HasRoles, HasPermissions;
    protected $table = 'nhan_vien';
    protected $appends = ['role_name'];
    protected $hidden = ['mat_khau', 'roles', 'permissions'];

    public function LoaiNhanVien()
    {
        return $this->belongsTo('App\LoaiNhanVien', 'loai_nhan_vien_id', 'id');
    }

    public function HoaDon()
    {
        return $this->hasMany('App\HoaDon', 'nhan_vien_id', 'id');
    }

    public function getJWTIdentifier() {
        return $this->getKey();
    }

    public function getJWTCustomClaims() {
        return [];
    }

    public function getRoleNameAttribute() {
        if (empty($this->roles[0]->name)) {
            return null;
        }
        return $this->roles[0]->name;
    }

    public function getPasswordAttribute() {
        return $this->mat_khau;
    }
}
