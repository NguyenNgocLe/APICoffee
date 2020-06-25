<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LoaiNhanVien extends Model
{
    use SoftDeletes;
    protected $table  = 'loai_nhan_vien';
    protected $hidden = ['created_at', 'updated_at'];
    
    public function danhSachNhanVien()
    {
        return $this->hasMany('App\NhanVien');
    }
}
