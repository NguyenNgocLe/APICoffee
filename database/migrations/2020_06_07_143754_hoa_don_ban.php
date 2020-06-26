<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class HoaDonBan extends Migration
{

    public function up()
    {
        Schema::create('hoa_don_ban', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('nhan_vien_id')->nullable();
            $table->unsignedInteger('khach_hang_id')->nullable();
            $table->date('ngay_ban')->nullable();
            $table->unsignedInteger('tong_tien')->nullable();
            $table->unsignedInteger('diem')->nullable();
            $table->string('trang_thai')->nullable();
            $table->string('ghi_chu')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('nhan_vien_id')->references('id')->on('nhan_vien');
            $table->foreign('khach_hang_id')->references('id')->on('khach_hang');
        });
    }

    public function down()
    {
        Schema::dropIfExists('hoa_don_ban');
    }
}
