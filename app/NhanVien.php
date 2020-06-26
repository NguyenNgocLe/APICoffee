<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authentic;
use Tymon\JWTAuth\Contracts\JWTSubject;
use Illuminate\Database\Eloquent\SoftDeletes;

class NhanVien extends Authentic implements JWTSubject
{
    use SoftDeletes;
    protected $table = 'nhan_vien';
    protected $hidden = ['mat_khau', 'created_at', 'updated_at'];

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
