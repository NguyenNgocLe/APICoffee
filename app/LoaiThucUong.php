<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LoaiThucUong extends Model
{
    protected $table = 'loai_thuc_uong';

    public function ThucUong()
    {
        return $this->hasMany('App\ThucUong', 'loai_thuc_uong_id', 'id');
    }
}
