<?php

namespace App;

use Symfony\Component\HttpFoundation\Request;
use Spatie\Permission\Traits\HasRoles;
use Spatie\Permission\Traits\HasPermissions;
use Illuminate\Foundation\Auth\User as Authentic;
use Tymon\JWTAuth\Contracts\JWTSubject;

class QuanTriVien extends Authentic implements JWTSubject
{
    use HasRoles, HasPermissions;
    protected $table = 'quan_tri_vien';
    protected $hidden = ['mat_khau', 'roles', 'permissions'];

    protected $fillable = [
        'mat_khau'
    ];

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
