<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class NhanVien extends Migration
{

    public function up()
    {
        Schema::create('nhan_vien', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('loai_nhan_vien_id');
            $table->string('ten_dang_nhap')->nullable();
            $table->string('mat_khau')->nullable();
            $table->double('otp')->nullable();
            $table->string('ho_ten')->nullable();
            $table->string('gioi_tinh')->nullable();
            $table->date('ngay_sinh')->nullable();
            $table->string('email')->nullable();
            $table->string('so_dien_thoai')->nullable();
            $table->string('dia_chi')->nullable();
            $table->string('anh_dai_dien')->nullable();
            $table->string('ghi_chu')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('loai_nhan_vien_id')->references('id')->on('loai_nhan_vien');
        });
    }

    public function down()
    {
        Schema::dropIfExists('nhan_vien');
    }
}
