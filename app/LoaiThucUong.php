<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LoaiThucUong extends Model
{
    use SoftDeletes;
    protected $table = 'loai_thuc_uong';
    protected $hidden = ['created_at', 'updated_at'];

    public function DanhSachThucUong()
    {
        return $this->hasMany('App\ThucUong');
    }
}
