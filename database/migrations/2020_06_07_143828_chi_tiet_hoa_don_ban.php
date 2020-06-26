<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChiTietHoaDonBan extends Migration
{

    public function up()
    {
        Schema::create('chi_tiet_hoa_don_ban', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('hoa_don_ban_id')->nullable();
            $table->unsignedInteger('thuc_uong_id')->nullable();
            $table->integer('so_luong')->nullable();
            $table->double('don_gia')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::dropIfExists('chi_tiet_hoa_don_ban');
    }
}
