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
            $table->date('ngay_nhap')->nullable();
            $table->double('tong_tien')->nullable();
            $table->string('ghi_chu')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::dropIfExists('hoa_don_nhap');
    }
}
