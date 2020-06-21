<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class LoaiNhanVien extends Migration
{

    public function up()
    {
        Schema::create('loai_nhan_vien', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ten_loai')->nullable();
            $table->boolean('xoa')->default(0)->nullable();
            $table->string('ghi_chu')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('loai_nhan_vien');
    }
}
