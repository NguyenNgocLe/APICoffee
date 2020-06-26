<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ThamSo extends Model
{
   use SoftDeletes;
   protected $table = 'tham_so';
   protected $hidden = ['created_at', 'updated_at'];
}
