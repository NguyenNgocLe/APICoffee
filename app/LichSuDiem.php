<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LichSuDiem extends Model
{
    use SoftDeletes;
    protected $table = 'lich_su_diem';
    protected $hidden = ['created_at', 'updated_at'];

    public function KhachHang()
    {
        return $this->belongsTo('App\KhachHang');
    }
}
