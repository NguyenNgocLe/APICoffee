<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class KhachHang extends Migration
{
    public function up()
    {
        Schema::create('khach_hang', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ten_dang_nhap')->nullable();
            $table->string('mat_khau')->nullable();
            $table->integer('otp')->nullable();
            $table->string('ho_ten')->nullable();
            $table->string('gioi_tinh')->nullable();
            $table->date('ngay_sinh')->nullable();
            $table->string('email')->nullable();
            $table->string('so_dien_thoai')->nullable();
            $table->string('dia_chi')->nullable();
            $table->string('anh_dai_dien')->nullable();
            $table->unsignedInteger('diem')->nullable();
            $table->string('ghi_chu')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::dropIfExists('khach_hang');
    }
}
