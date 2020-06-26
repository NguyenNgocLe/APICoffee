<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class HoaDonNhap extends Migration
{

    public function up()
    {
        Schema::create('hoa_don_nhap', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('nhan_vien_id')->nullable();
            $table->date('ngay')->nullable();
            $table->unsignedInteger('tong_tien')->nullable();
            $table->string('ghi_chu')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('nhan_vien_id')->references('id')->on('nhan_vien');
        });
    }

    public function down()
    {
        Schema::dropIfExists('hoa_don_nhap');
    }
}
