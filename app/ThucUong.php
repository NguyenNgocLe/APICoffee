<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ThucUong extends Model
{
    protected $table = 'thuc_uong';

    public function LoaiThucUong()
    {
        return $this->belongsTo('App\LoaiThucUong', 'loai_thuc_uong_id', 'id');
    }
}
