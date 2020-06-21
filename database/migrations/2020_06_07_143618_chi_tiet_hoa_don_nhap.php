<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChiTietHoaDonNhap extends Migration
{

    public function up()
    {
        Schema::create('chi_tiet_hoa_don_nhap', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('hoa_don_nhap_id')->nullable();
            $table->unsignedInteger('nguyen_lieu_id')->nullable();
            $table->integer('so_luong')->nullable();
            $table->double('gia')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('chi_tiet_hoa_don_nhap');
    }
}
